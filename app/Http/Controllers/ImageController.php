<?php

namespace App\Http\Controllers;

use App\Models\Product;
use http\Env\Response;

class ImageController
{
    public function show($filename){
        $url = $_SERVER['DOCUMENT_ROOT'] . "\\images\\" . $filename;
        if( !file_exists($url)){
            
            return response()->noContent(404);
        }

        return response()->file($url, ['Cache-Control' => 'max-age=31536000']);
    }

}