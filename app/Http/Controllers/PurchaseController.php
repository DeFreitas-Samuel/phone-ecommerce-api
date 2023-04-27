<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    
    public function store(Request $request){
        return response()->json(['request'=> $request]);
    }

}
