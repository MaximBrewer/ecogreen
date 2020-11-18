<?php


namespace App\Services;
use View;
use Illuminate\Support\Facades\Storage;

class PaginateService
{
    public static function paginateService( object $data){
            $all_data="";
            if(isset($data)){
                $all_data=View::make('elements.paginate',['paginator' => $data]); 
                $all_data= ((string) $all_data);
            }
            return $all_data;
        }
}


