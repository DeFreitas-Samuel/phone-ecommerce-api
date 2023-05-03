<?php

namespace App\Http\Controllers;

class ImageController
{
    public function show($name){
        $url = $_SERVER['DOCUMENT_ROOT'] . "\\images\\" . $name;
        if( !file_exists($url)){
            
            return response()->noContent(404);
        }

        return response()->file($url);
    }

}