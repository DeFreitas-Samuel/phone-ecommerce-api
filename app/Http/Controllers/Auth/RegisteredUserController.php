<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'address' => ['required', 'string'],
            'contact_number' => ['required', 'string'],
            'birthdate' => ['required', 'date'],
            'password'=> ['required', 'string'],
            'email' => ['required', 'email'],
        ]);
        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'address' => $request->address,
            'contact_number' => $request->contact_number,
            'birthdate' => $request->birthdate,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);

        event(new Registered($user));
        Auth::login($user);

        return response()->noContent(201);
    }
}
