<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class ImageController
{
    public function show($filename)
    {
        if (App::environment('local')) {
            $url = $_SERVER['DOCUMENT_ROOT'] . "\\images\\" . $filename;
            if (!file_exists($url)) {

                return response()->json(['not found' => $url], 404);
            }

            return response()->json(['url' => $url], 200);
        }

        if (App::environment('production')) {
            $url = $_SERVER['DOCUMENT_ROOT'] . "/images/" . $filename;
            if (!file_exists($url)) {

                return response()->json(['not found' => $url], 404);
            }

            return response()->file($url);
        }
    }
}
