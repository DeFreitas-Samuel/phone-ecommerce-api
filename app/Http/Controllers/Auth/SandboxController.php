<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SandboxController extends Controller
{
    public function show(){
        if (Auth::check()) {
            return response()->json([
                'nigga' => 'A star is motherfucking bornnnnnn!!!'
            ]);
        }
        return response()->noContent(418);
    }

}
