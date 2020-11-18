<?php

namespace App\Http\Controllers;

use App\DBStorage;
use App\Http\Requests\CheckoutRequest;
use App\Models\OrderDocument;
use App\Models\OrderDocumentTemplateModel;
use App\Models\OrderItems;
use App\Models\OrderPaymentType;
use App\Models\Orders;
use App\Models\OrderShippingType;
use App\Models\OrderStatus;
use App\Models\Product;
use App\Models\Rekvizit;
use App\Services\FileService;
use App\Services\HelperService;
use App\User;
use BWF\DocumentTemplates\DocumentTemplates\DocumentTemplateFactory;
use Composer\Json\JsonValidationException;
use Darryldecode\Cart\Exceptions\InvalidConditionException;
use Darryldecode\Cart\Exceptions\InvalidItemException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CheckoutController extends Controller
{
    protected $count = 0;

    public function validateForm(Request $request)
    {
        $validation = $this->validateUserType($request);
        return response()->json($validation, $validation['status']);
    }

    private function validateUserType(Request $request)
    {
        try {
            if ($request->user_type == 'np') {
                $attributeNames = array(
                    'np_name' => 'Имя',
                    'np_email' => 'Почта',
                    'np_adress' => 'Адрес',
                );
                $validator = Validator::make($request->all(), [
                    'np_email' => ['required', 'string', 'email:rfc,dns'],
                    'np_name' => ['required', 'string', 'min:2', 'max:40'],
                    'np_adress' => ['required', 'string', 'min:5'],
                ]);
                $validator->setAttributeNames($attributeNames);
            } else {
                $attributeNames = array(
                    'ent_email' => 'Почта',
                    'ent_name' => 'Имя',
                    'ent_adress' => 'Адрес',
                );
                $validator = Validator::make($request->all(), [
                    'ent_email' => ['required', 'string', 'email:rfc,dns'],
                    'ent_name' => ['required', 'string', 'min:2', 'max:40'],
                    'ent_adress' => ['required', 'string', 'min:5'],
                ]);
                $validator->setAttributeNames($attributeNames);
            }

            if ($validator->fails()) {
                // session()->flash('errors', $validator->errors());
                return [
                    'errors' => $validator->errors(),
                    'status' => 400
                ];
            }
            return [
                'message' => "success",
                'status' => 200
            ];
        } catch (InvalidItemException | InvalidConditionException | \Exception $e) {
            $error = 'Ошибка! ' . $e->getMessage();
            session()->flash('errors', collect([$error]));
            return [
                'message' => $error,
                'status' => $e->getCode()
            ];
        } catch (ValidationException $e) {
            $error = 'Ошибка! ' . $e->getMessage();
            session()->flash('errors', collect([$error]));
            return [
                'message' => $error,
                'status' => $e->getCode()
            ];
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CheckoutRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $this->validateUserType($request);

        if ($validation['message'] == 'success') {

            $order = $this->addToOrdersTables($request, null);
            $user = User::findOrFail(Auth::id());
            $message = $user->getSetting();

            \Cart::session(auth()->user()->id)->clear();
            \Cart::session(auth()->user()->id)->clearCartConditions();

            return response()->json([
                'url' => route('order', $order->id),
                'message' => "success",
                'order' => $order,
                'status' => 200
            ]);
        } else
            return response()->json($validation, $validation['status']);
    }


    protected function addToOrdersTables($request, $error)
    {
        $user = auth()->user();
        if ($request->user_type == 'np') {
            $billing_email = $request->np_email;
            $billing_name = $request->np_name;
            $billing_address = $request->np_adress;
            $billing_phone = $request->np_phone;
            $notes = $request->np_comment;
        } else {
            $billing_email = $request->ent_email;
            $billing_name = $request->ent_name;
            $billing_address = $request->ent_adress;
            $billing_phone = $request->ent_phone;
            $notes = $request->ent_comment;
        }


        // Insert into orders table
        $order = Orders::create([
            'order_nr' => $request->order_nr,
            'user_id' => Auth::check() ? Auth::user()->id : null,
            'billing_email' => $billing_email,
            'billing_name' => $billing_name,
            'billing_address' => $billing_address,
            'billing_city' => $user->city,
            //            'billing_country' => $user->country,
            'billing_phone' => $billing_phone,
            'notes' => $notes ?? null,
            'type_credit' => $request->pay_method ?? null, // this is non specific column to write pay_method text
            'billing_total' => HelperService::getNumbers()->get('total'),
            'billing_nds_total' => HelperService::getNumbers()->get('ndsTotal'),
            'shipping_type_id' => OrderShippingType::where('default', 1)->value('id'),
            'payment_type_id' => OrderPaymentType::where('default', 1)->value('id'),
            'status_id' => OrderStatus::where('default', 1)->value('id'),
            'error' => $error,
        ]);

        // Insert into order_items table
        foreach (HelperService::getNumbers()->get('items') as $item) {
            OrderItems::create([
                'order_id' => $order->id,
                'product_id' => $item['associatedModel']['id'],
                'quantity' => $item->quantity,
                'packing' => $item->attributes->packing,
                'price' => HelperService::presentPrice($item['associatedModel']['price']),
                'discount' => HelperService::getNumbers()->get('discounts')[$item->id],
                'nds_price' => HelperService::presentPrice($item->attributes->nds),
                'sale_price' => HelperService::getNumbers()->get('sale_prices')[$item->id],
                'subtotal' => HelperService::getNumbers()->get('subtotals')[$item->id],
            ]);
        }

        // Update some data users in table
        $user = User::findOrFail($user->id);
        $user->billing_address = $billing_address;
        // if user_type is entity
        if ($request->user_type == 'entity') {
            $user->inn = $request->ent_inn;
            $user->name_organization = $request->ent_org;
        }
        $user->save();
        // Automatic generate Order documents
        $this->createOrderDocsFromForm($order);

        return $order;
    }

    protected function createOrderDocsFromForm($order)
    {
        // КП
        $type_kp = 5;
        $file_name = 'КП_' . $order->order_nr . '.pdf';
        try {
            FileService::writeRenderedPdf($file_name, $type_kp, $order->id, 'order_docs');
        } catch (\Exception $e) {
        }
        // Счет_по_оплату
        $type_schet = 1;
        $file_name = 'Счет_по_оплату_' . $order->order_nr . '.pdf';
        try {
            FileService::writeRenderedPdf($file_name, $type_schet, $order->id, 'order_docs');
        } catch (\Exception $e) {
        }
        // Приложение
        $type_app = 3;
        $file_name = 'Приложение_' . $order->order_nr . '.pdf';
        try {
            FileService::writeRenderedPdf($file_name, $type_app, $order->id, 'order_docs');
        } catch (\Exception $e) {
        }
        // Договор доставки
        $type_dog = 2;
        $file_name = 'Договор_доставки_' . $order->order_nr . '.pdf';
        try {
            FileService::writeRenderedPdf($file_name, $type_dog, $order->id, 'order_docs');
        } catch (\Exception $e) {
        }
        return true;
    }

    protected function decreaseQuantities()
    {
        foreach (HelperService::getNumbers()->get('items') as $item) {
            $product = Product::with('getPacking')->find($item->id);
            $pack_qty = $product->getPacking->where('name', $item->attributes->packing)->firstOrFail()->value('quantity');
            $product->getPacking->update(['quantity' => $pack_qty - $item->quantity]);
        }
    }

    protected function productsAreNoLongerAvailable()
    {
        foreach (HelperService::getNumbers()->get('items') as $item) {
            $product = Product::with('getPacking')->find($item->id);
            $pack_qty = $product->getPacking->where('name', $item->attributes->packing)->firstOrFail()->value('quantity');
            if ($pack_qty < $item->quantity) {
                return true;
            }
        }

        return false;
    }

    public function orderNrGenerate()
    {
        // generate unique_id column for order_id

        //        $session_id = (Auth::user()) ? \auth()->user()->id :\request()->session()->getId();
        //        if (DBStorage::has($session_id)) {
        //            $this->count++;
        //        }
        $today = date("md");
        $rand = strtoupper(substr(uniqid(sha1(time())), 0, 6));
        $unique = '#' . $today . $rand;
        return response()->json([
            'result' => $unique
        ]);
    }

    public function UploadEntFiles(Request $request)
    {
        if ($files = $request->file('files')) {
            foreach ($files as $file) {
                $content = FileService::uploadWithCrop($file, 'rekvizits');
                Rekvizit::create([
                    'user_id' => auth()->user()->id,
                    'file' => $content,
                ]);
            }
        }
        return response()->json([
            'result' => $files,
            'message' => "Files upload successfully!"
        ]);
    }
}
