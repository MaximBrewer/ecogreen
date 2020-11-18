<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ActiveSubstance;
use App\Models\Brand;
use App\Models\CategoryItems;
use App\Models\ContentMenus;
use App\Models\Fruit;
use App\Models\License;
use App\Models\Post;
use App\Services\FileService;
use App\Services\PaginateService;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductsAndCategoryItems;
use App\Models\ProductTypePacking;
use App\Models\Proposition;
use App\Models\ActivceSubstance;
use App\Models\Chemical;
use App\Models\Norm;
use Response;
use View;
class SiteController extends Controller
{
    public function getProducts(){
        // $product_ids = ProductsAndCategoryItems::where('cat_items_id',$catalog_id)->get('product_id');
        // $items = Product::whereIn('id',$product_ids)->get();
        return view('catalog.catalog')->with('active', 'Каталог');
        // return response()->json($items);

    }

    public function getOneProduct($id){
        $oneItem=Product::findOrFail($id);
        $onePackings=ProductTypePacking::where('product_id',$id)->get();
        $norm=Norm::where('product_id',$id)->get();
        return view('catalog.product',compact('oneItem','onePackings','norm'))->with('active', 'Каталог');

    }

    public function getProductOrder(Request $request){
        $value=$request->check;
        if($value==2){
            $items=Product::with(['getBrand','getActiveSubstance'])
                            ->orderBy('created_at','DESC')
                            ->paginate(env('APP_PAGINATE',9))
                            ->appends(request()->query());
        }elseif($value==1){
        // 1-л bo'yicha narxini kamayish tartibida chiqarish
            $items=Product::with(['getBrand','getActiveSubstance'])
                            ->orderBy('price','DESC')
                            ->paginate(env('APP_PAGINATE',9))
                            ->appends(request()->query());
        }elseif($value==0){
        // 1-л bo'yicha narxini o'sish tartibida chiqarish
            $items=Product::with(['getBrand','getActiveSubstance'])
                            ->orderBy('price','ASC')
                            ->paginate(env('APP_PAGINATE',9))
                            ->appends(request()->query());
        }else{
            $items=Product::with(['getBrand','getActiveSubstance'])->paginate(env('APP_PAGINATE',9));
        }
        $paginate=PaginateService::paginateService($items);
        $result=[
            'result'=>$items,
            'paginate'=>$paginate
        ];
        return response()->json($result);

    }

    public function getOrderAlpha(){

        $items=Product::get();
        return view('catalog.catalog',compact('items'))->with('active', 'Каталог');

    }

    public function getOrderByCategory(array $array){

        // array=[1,2,32,23] shu ko'rinishda category itemslarni id lari keladi;12
        $getItems=ProductsAndCategoryItems::whereIn('cat_items_id',$array)->get();
        $getItems=json_decode(json_encode($getItems,true));
        $product_id=array_column($getItems,'product_id');

        $items=Product::whereIn('id',$product_id)->get();
    }

    public function fileModal(Request $request){
        $request->validate([
            'fio'=>'required',
            'email'=>'required',
//            'file'=>'required'
        ]);
        if (!$request->politics_agree){
            return redirect()->back()->with('error','Читайте политику конфеденциальности перед созданием заявку!');
        }
        $file=$request->file('file');
        if($file){
            $content= FileService::upload($file,'propositions');
        }else{
            $content = '';
        }

        // this like
        // [{"download_link":"propositions\\August2020\\pkWfni7PzpoNfs6LaPNz.xlsx","original_name":"test.xlsx"}]

        $data=[
            'name'=>$request->fio,
            'email'=>$request->email,
            'file'=>$content,
            'user_id'=>0
        ];
        Proposition::create($data);
        return redirect()->back()->with('success','Заявка успешно создано!');
    }

   public function getItemsByChars(Request $request){

        $upperCase=$request->get('data');

        $lowerCase=mb_strtolower($upperCase,'UTF-8');
        $data=Product::where('name','LIKE',"$lowerCase%")
                    ->orWhere('name','LIKE',"$upperCase%")
                    ->with('getBrand')
                    ->with('getActiveSubstance')
                    ->paginate(env('APP_PAGINATE',6))
                    ->appends(request()->query());
        $result=[
            'request'=>false,
            'paginate'=>null
        ];
        // $all_product_id=Product::get();
        // $all_product_id=json_decode(json_encode($all_product_id,true));
        // $all_product_id=array_column($all_product_id,'id');
        if(count($data)>0){

            // $some_product_id=json_decode(json_encode($data,true));
            // $some_product_id=array_column($some_product_id,'id');
            // $stayed_product_id=\array_diff($all_product_id,$some_product_id);
            // $stayed_products=Product::whereIn('id',$stayed_product_id)->with('getBrand')->with('getActiveSubstance')->get();
            // $some_products=Product::whereIn('id',$some_product_id)->with('getBrand')->with('getActiveSubstance')->get();

            $paginate=PaginateService::paginateService($data);
            $result=[
                'request'=>true,
                'result'=>$data,
                'paginate'=>$paginate
            ];
        }
        return response()->json($result);
    }

    public function getFilter(Request $request){
        $checked_ids=$request->get('check') ?? [];
        $product_ids=ProductsAndCategoryItems::whereIn('cat_items_id',$checked_ids)->get('product_id');
        $product_ids=json_decode(json_encode($product_ids,true));
        $true_result=[
            'result'=>"Not found",
            'status'=>404,
        ];
        $product_ids = $product_ids ?? [];
        $data=[];
        if(count($product_ids)>0){
            foreach($product_ids as $value){
                $ids_product[]=$value->product_id;
            }

            $product_ids=ProductsAndCategoryItems::whereIn('product_id',$ids_product)
                                                ->get();

            $product_ids=json_decode(json_encode($product_ids,true));
            $product_ids=array_unique(array_column($product_ids,"product_id"));
            $id=$product_ids;
            $data=Product::whereIn('id',$product_ids)->with('getBrand')->with('getActiveSubstance')->paginate(env('APP_PAGINATE',9))->appends(request()->query());
            $paginate=PaginateService::paginateService($data);
            $true_result=[
                'result'=>$data,
                'status'=>200,
                'paginate'=>$paginate
            ];
        }
        return response()->json($true_result);

    }

    public function getProducts_jquery(){
        $items = Product::orderBy('name','ASC')->with('getBrand')->with('getActiveSubstance')->paginate(env('APP_PAGINATE',9));
        $paginate=PaginateService::paginateService($items);
        return response()->json([
            'result'=>$items,
            'status'=>"200",
            'paginate'=>$paginate
            ]);
        // return Response::json(View::make('catalog.catalog',array('data'=>$data))->with('active', 'Каталог')->render());
    }

    public function index(){
        $products_xit = Product::where('is_xit','=',true)->take(10)->get();
        $products_inSale = Product::where('discount','>',0)->take(10)->get();

        $news = Post::where([
            ['type','=','news'],
            ['status','=','PUBLISHED']
        ])->orderBy('id','desc')->take(10)->get();
        $license = License::orderBy('id','desc')->take(10)->get();

        return view('main_page',compact('license','news','products_xit', 'products_inSale'));
    }

    public function about_us(){
        $content = ContentMenus::where('slug','about_us')->first();
        return view('about_us',compact('content'))->with('active', 'О_нас');
    }
    public function contacts(){
        return view('contacts')->with('active', 'Контакты');
    }
    public function search(Request $request){
        if (!$request->has('q'))
            return view('catalog.search')->with('active', 'Каталог');

        $q = $request->input('q');
        $q=trim($q);
        $lowerCase=mb_strtolower($q,'UTF-8');

        $cat_item = CategoryItems::where('name', 'LIKE', '%' . $q . '%')
            ->orWhere('name', 'LIKE', "%$lowerCase%")
            ->orWhere('slug', 'LIKE', "%$q%")->first() ?? null;

        $products = Product::where('name', 'LIKE', '%' . $q . '%')
            ->orWhere('name', 'LIKE', "%$lowerCase%")
            ->orWhere('slug', 'LIKE', "%$q%")
            ->orWhere('description', 'LIKE', "%$q%");

        $products_by_cat_item = [];
        if ($cat_item) {
            $products_by_cat_item = $products->orWhereHas('getCategoryItems',
                function ($query) use ($cat_item) {
                    $query->where('name', $cat_item->name);
                }
            )->get() ??null;
        }

        $products = $products->orWhereHas('getCategoryItems',
            function ($query) use ($q,$lowerCase) {
                $query->where('name', 'LIKE', '%' . $q . '%')
                ->orWhere('name', 'LIKE', '%' . $lowerCase . '%')
                ->orWhere('slug', 'LIKE', '%' . $q . '%');
            }
        );

        $products_search = $products->paginate(env('APP_PAGINATE',9))
                                    ->appends(request()->query());

        $paginate=view('elements.paginate_for_search',['paginator'=>$products_search]);

        return view('catalog.search', compact(['products_search','q','paginate','cat_item','products_by_cat_item']))->with('active', 'Каталог');
    }

    public function getProductDocument($id){

        $document=Product::findOrFail($id);
        if(!empty($document->file)){
            $file_path=explode('"',$document->file)[3];
            $pathFile=storage_path('app/public/'.$file_path);
            return response()->download($pathFile);
        }else{
            return redirect()->back()->with('error','Файл не найти здесь');
        }

    }
    public function getZipFile($id){
        $document=Product::findOrFail($id);
        if(!empty($document->file)){
            $zip_file=time().'.zip';
            $zip=new \ZipArchive();
            $zip->open($zip_file,\ZipArchive::CREATE | \ZipArchive::OVERWRITE);
            $file_path=explode('"',$document->file)[3];
            $zip->addFile(storage_path('app/public/'.$file_path));
            $zip->close();
            return response()->download($zip_file);
        }else{
            return redirect()->back()->with('error','Файл не найти здесь');
        }

    }
    // public function getZipFile($id){
    //     $documents=Product::where('id',$id)->get();
    //     if(!empty($documents)>0){
    //         $zip_file=time().'.zip';
    //         $zip=new \ZipArchive();
    //         $zip->open($zip_file,\ZipArchive::CREATE | \ZipArchive::OVERWRITE);
    //         foreach($documents as $value){
    //             $file_path=explode('"',$value->file)[3];
    //             $zip->addFile(storage_path('app/public/'.$file_path));
    //         }
    //         $zip->close();
    //         return response()->download($zip_file);
    //     }else{
    //         return redirect()->back()->with('error','Файл не найдень здесь');
    //     }

    // }

}
