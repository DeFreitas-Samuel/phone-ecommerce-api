<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class ImageController extends Controller
{
    public function show($filename)
    {
        $url = public_path() . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . $filename;


        return $this->getImage($url);

    }

    private function getImage($url){
        if (!file_exists($url)) {
            return response()->json(['not found' => $url], 404);
        }

        return response()->file($url);
    }
}
