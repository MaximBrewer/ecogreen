<?php

namespace App\Http\Controllers;

use App\DocumentTemplates\InvoiceTemplate;
use App\Models\OrderDocument;
use App\Models\OrderDocumentTemplateModel;
use App\Models\OrderItems;
use App\Models\Orders;
use App\Services\FileService;
use BWF\DocumentTemplates\DocumentTemplates\DocumentTemplateFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class OrderDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data=OrderDocument::where('order_id',$id)->get();
        return view('order_document.index',compact('data','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($order_id)
    {
        $array=[];
        return view('order_document.edit-add',compact('order_id','array'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id'=>'required',
            'file'=>'required',
        ]);

        $file=$request->file('file');
        $content = FileService::uploadWithCrop($file, 'order_docs');
        $items=[
            'order_id'=>$request->order_id,
            'file'=>$content,
        ];
        $id=$request->order_id;
        OrderDocument::create($items);
        return redirect()->route('order.document.index',compact('id'))->with(
            [
                'message'=>__('voyager::generic.successfully_added_new'),
                'alert-type'=>'success'
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=OrderDocument::findOrFail($id);
        return view('order_document.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $array=OrderDocument::findOrFail($id);
        $order_id=$array->order_id;

        return view('order_document.edit-add',compact('array','order_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'order_id'=>'required',
            'file'=>'required',
        ]);
        $file=$request->file('file');
        $content = FileService::uploadWithCrop($file, 'order_docs');

        $update_items=[
            'order_id'=>$request->order_id,
            'file'=>$content,
        ];

        $update_id=OrderDocument::findOrFail($id);
        $id=$request->order_id;

        $update_id->update($update_items);

        return redirect()->route('order.document.index',compact('id'))->with(
            [
                'message'=>__('voyager::generic.successfully_updated'),
                'alert-type'=>'success'
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrderDocument::findOrFail($id)->delete();
        return redirect()->back()->with(
            [
                'message'=>__('voyager::generic.successfully_deleted'),
                'alert-type'=>'success'
            ]
        );
    }

    public function kp($id)
    {
        $order = Orders::findOrFail($id);
        // КП
        $type_kp = 5;
        $file_name = 'КП_'.$order->order_nr.'.pdf';
        try {
            if (!File::exists($file_name)){
                FileService::writeRenderedPdf($file_name, $type_kp, $order->id, 'order_docs');
            }else{
                return redirect()->back()->with(
                    [
                        'message'=>__('документ уже создано!'),
                        'alert-type'=>'error'
                    ]
                );
            }
        } catch (\Exception $e) {
        }
        return redirect()->back()->with(
            [
                'message'=>__('документ успешно оброботан!'),
                'alert-type'=>'success'
            ]
        );
    }
    public function schet($id)
    {
        $order = Orders::findOrFail($id);
        // Счет_по_оплату
        $type_schet = 1;
        $file_name = 'Счет_по_оплату_'.$order->order_nr.'.pdf';
        try {
            if (!File::exists($file_name)){
                FileService::writeRenderedPdf($file_name, $type_schet, $order->id, 'order_docs');
            }else{
                return redirect()->back()->with(
                    [
                        'message'=>__('документ уже создано!'),
                        'alert-type'=>'error'
                    ]
                );
            }
        } catch (\Exception $e) {
        }
        return redirect()->back()->with(
            [
                'message'=>__('документ успешно оброботан!'),
                'alert-type'=>'success'
            ]
        );
    }
    public function application($id)
    {
        $order = Orders::findOrFail($id);
        // Приложение
        $type_app = 3;
        $file_name = 'Приложение_'.$order->order_nr.'.pdf';
        try {
            if (!File::exists($file_name)){
                FileService::writeRenderedPdf($file_name, $type_app, $order->id, 'order_docs');
            }else{
                return redirect()->back()->with(
                    [
                        'message'=>__('документ уже создано!'),
                        'alert-type'=>'error'
                    ]
                );
            }
        } catch (\Exception $e) {
        }
        return redirect()->back()->with(
            [
                'message'=>__('документ успешно оброботан!'),
                'alert-type'=>'success'
            ]
        );
    }
    public function dogovor($id)
    {
        $order = Orders::findOrFail($id);
        // Договор доставки
        $type_dog = 2;
        $file_name = 'Договор_доставки_'.$order->order_nr.'.pdf';

        try {
            if (!File::exists($file_name)){
                FileService::writeRenderedPdf($file_name, $type_dog, $order->id, 'order_docs');
            }else{
                return redirect()->back()->with(
                    [
                        'message'=>__('документ уже создано!'),
                        'alert-type'=>'error'
                    ]
                );
            }
        } catch (\Exception $e) {
        }
        return redirect()->back()->with(
            [
                'message'=>__('документ успешно оброботан!'),
                'alert-type'=>'success'
            ]
        );
    }


}
