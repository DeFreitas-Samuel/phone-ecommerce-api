<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     *
     * @param \App\Http\Requests\Auth\LoginRequest $request
     * @return \Illuminate\Http\Response
     * @throws ValidationException
     */
    public function store(LoginRequest $request)
    {
        $resultOfLogin = $request->authenticate();

        if(isset($resultOfLogin['error'])){
            if($resultOfLogin['error'] === 'email'){
                return response()->json(['error' => 'Email was not found in the database'], 401);
            }
            if($resultOfLogin['error'] === 'password'){
                return response()->json(['error' => 'The password is incorrect'], 401);
            }
        }

        $request->session()->regenerate();

        return response()->json([
            'access_token' => $request->user()->createToken('frontend_token')->plainTextToken,
            'user' => $resultOfLogin
        ]);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->noContent();
    }
}
