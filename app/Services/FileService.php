<?php


namespace App\Services;

use App\Models\OrderDocument;
use App\Models\OrderDocumentTemplateModel;
use BWF\DocumentTemplates\DocumentTemplates\DocumentTemplateFactory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;

class FileService
{
    /**
     *  This like
     *  [{"download_link":"propositions\\August2020\\pkWfni7PzpoNfs6LaPNz.xlsx","original_name":"test.xlsx"}]
     * @param $file
     * @param string $directory
     * @return string
     */
    public static function upload($file, $directory=''){
        $file_orginal_name = $file->getClientOriginalName();
        $file_name = time().'_'.$file_orginal_name;
        $file_path = storage_path('/app/public/'.$directory.'/files');
        if(!Storage::exists($file_path)){
            Storage::makeDirectory($file_path);
        }
        $file->move($file_path,$file_name);
        $file_full_path = $directory."\\\\files\\\\".$file_name;
        $content = "[{\"download_link\":\"$file_full_path\",\"original_name\":\"$file_orginal_name\"}]";

        return $content;
    }
    /**
     *  This like
     *  [{"download_link":"propositions\\August2020\\pkWfni7PzpoNfs6LaPNz.xlsx","original_name":"test.xlsx"}]
     * @param $file
     * @param string $directory
     * @return string
     */
    public static function uploadWithCrop($file, $directory=''){
        $file_orginal_name = $file->getClientOriginalName();
        $type = $file->getClientOriginalExtension();
        $file_name = time().'_'.$file_orginal_name;
        $file_path = storage_path('/app/public/'.$directory.'/files');
        if(!File::exists($file_path)){
            File::makeDirectory($file_path);
        }
        $file_full_path = $directory."\\\\files\\\\".$file_name;
        $full_path_thumb = storage_path('/app/public/'.$file_full_path);
        if($type=="jpg" || $type=="jpeg" || $type=="png" || $type=="bmp"){
            $thumbs = Image::make($file);
            $thumbs->fit(213, 189, function($constraint) {
                $constraint->aspectRatio();
            })->save($full_path_thumb);
        }else{
            $file->move($file_path,$file_name);
        }
        $content = "[{\"download_link\":\"$file_full_path\",\"original_name\":\"$file_orginal_name\"}]";
        return $content;
    }

    /**
     *  Get images also with cropped, medium.. types
     * @param $path
     * @param string $modifier
     * @return string
     */
    public static function voyager_image($path, $modifier=''){
        $img = '.'.pathinfo('storage/'.$path, PATHINFO_EXTENSION);

        $imgName = str_replace($img,'', $path);
        if ($modifier != ''){
            $img = $imgName."-".$modifier.$img;
        }else{
            $img = $imgName.$img;
        }
        return $img;
    }

    /**
     *  This like
     *  [{"download_link":"propositions\\August2020\\pkWfni7PzpoNfs6LaPNz.xlsx","original_name":"test.xlsx"}]
     * @param $file_name
     * @param string $directory
     * @return string
     * @throws \Exception
     */
        public static function writeRenderedPdf($file_name,$type, $order_id,$directory=''){
        $documentTemplateModel = OrderDocumentTemplateModel::findOrFail($type);
        $documentTemplate = DocumentTemplateFactory::build($documentTemplateModel);
        $file_path = storage_path('/app/public/'.$directory.'/files');
        if(!File::exists($file_path)){
            File::makeDirectory($file_path);
        }
        $documentTemplate->renderPdf($file_path.'/'.$file_name);
        $file_full_path =$directory."/files/".$file_name;

        $content = "[{\"download_link\":\"$file_full_path\",\"original_name\":\"$file_name\"}]";
        OrderDocument::create([
            'order_id'=>$order_id,
            'file'=>$content
        ]);

        return $content;
    }

}
