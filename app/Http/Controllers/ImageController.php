<?php

namespace App\Http\Controllers;

use App\Models\Product;
use http\Env\Response;

class ImageController
{
    public function show($name){
        if( !file_exists('C:/Users/defre/source/repos/PhoneEcommerceAPI/public/images/'.$name)){
            return response()->noContent(404);
        }

        return response()->file('C:/Users/defre/source/repos/PhoneEcommerceAPI/public/images/'.$name);
    }

    public function test(){
        for ($index = 1; $index < 61; $index++){
            $product = Product::find($index);
            $product->imageUrl=  "http://localhost:8000/api/images/" . $index . ".jpg";
            $product->save();
        }

        return response()->noContent(200);

    }
}
