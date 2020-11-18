<?php

namespace App\Http\Controllers;

use App\Models\ActiveSubstance;
use App\Models\Chemical;
use App\Models\ContentMenus;
use App\Models\Post;
use App\Models\Brand;
use PDF;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function chemical($id){

        $item=Chemical::findOrFail($id);
        return view('catalog.chemical',compact('item'));
    }
    public function substance($id){

        $item=ActiveSubstance::findOrFail($id);
        return view('catalog.chemical',compact('item'));
    }

    public function crop_guide(){
        $posts = Post::where([
            ['type','=','article'],
            ['status','=','PUBLISHED']
        ])->get();

        return view('crop_guide.crop_guide', compact('posts'))->with('active', 'Справочник');
    }
    public function crop_guide_product($slug,Request $request){
        $post = Post::where([
            ['type','=','article'],
            ['status','=','PUBLISHED'],
            ['slug','=',$slug]
        ])->first();
        $download=$request->download ?? '';
        if($download=='pdf'){
            // return $request->download;
            $pdf = PDF::loadView('crop_guide.crop_product_pdf',compact('post'));
            return $pdf->download('crop_guide_'.$slug.'.pdf');
        }
        if($download=='word'){
            $phpWord=new \PhpOffice\PhpWord\PhpWord();
            $section=$phpWord->addSection();
            $section->addText(htmlentities($post->title));
            $section->addText(htmlentities(strip_tags($post->body)));
            $objWriter=\PhpOffice\PhpWord\IOFactory::createWriter($phpWord,'Word2007');
            $fileName=time().'.docx';
            try{
                $objWriter->save(storage_path('app/public/wordFiles/'.$fileName));
            }catch (Exception $e){
            }
            return response()->download(storage_path('app/public/wordFiles/'.$fileName));
        }
        return view('crop_guide.crop_product',compact('post'))->with('active', 'Справочник');
    }
    public function news(){
        $posts = Post::where([
            ['type','=','news'],
            ['status','=','PUBLISHED']
        ])->paginate(Post::$PAGINATE);
        return view('news.news', compact('posts'))->with('active', 'Справочник');
    }
    public function newsOne($slug){
        $post = Post::where([
            ['type','=','news'],
            ['status','=','PUBLISHED'],
            ['slug','=',$slug]
        ])->first();
        return view('news.news_one',compact('post'))->with('active', 'Справочник');
    }
    public function content($slug){
        $content = ContentMenus::where('slug',$slug)->first();
        return view('content_pages',compact('content'))->with('active', 'О_нас');
    }
    public function footerMenus(){
        $footer_menus = ContentMenus::where([['slug','!=','about_us'],['status','=','1']])->get();

        return response()->json([
            'result'=> $footer_menus,
            'status'=>200
        ]);
    }
    public function footerNews(){
        $footer_news = Post::where([
            ['type','=','news'],
            ['status','=','PUBLISHED']
        ])->latest()->take(2)->get();

        return response()->json([
            'result' =>$footer_news,
            'status'=>200
        ]);
    }
    public function crop_guide_brand($slug,Request $request){
        $brand = Brand::where('slug',$slug)->first();
        $download=$request->download ?? '';
        if($download=='pdf'){
            // return $request->download;
            $pdf = PDF::loadView('crop_guide.crop_brand_pdf',compact('brand'));
            return $pdf->download('crop_guide_'.$slug.'.pdf');
        }
        if($download=='word'){
            $phpWord=new \PhpOffice\PhpWord\PhpWord();
            $section=$phpWord->addSection();
            //$brand->name $brand->description
            $section->addText(htmlentities($brand->name));
            $section->addText(htmlentities(strip_tags($brand->description)));
            $objWriter=\PhpOffice\PhpWord\IOFactory::createWriter($phpWord,'Word2007');
            $fileName=time().'.docx';
            try{
                $objWriter->save(storage_path('app/public/wordFiles/'.$fileName));
            }catch (Exception $e){
            }
            return response()->download(storage_path('app/public/wordFiles/'.$fileName));
        }
        return view('crop_guide.crop_brand',compact('brand'))->with('active', 'Справочник');
    }
    public function getbrands(){
        $brands = Brand::all();
        return view('crop_guide.brands',compact('brands'));
    }

    public function getChemicals(){
        $chemicals = Chemical::all();
        return view('crop_guide.chemicals',compact('chemicals'));
    }
   public function getSubstances(){
        $substances = ActiveSubstance::all();
        return view('crop_guide.substances',compact('substances'));
    }

}
