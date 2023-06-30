<?php

namespace App\Http\Controllers;

use App\Models\Product;
use http\Env\Response;

class ImageController
{
    public function show($filename){
        $url = $_SERVER['DOCUMENT_ROOT'] . "\\images\\" . $filename;
        if( !file_exists($url)){
            
            return response()->json(['not found' => $url],404);
        }

        return response()->json(['url'=>$url], 200);
    }

}