<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function login(Request $request) {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            $token =  $user->createToken('admin')->accessToken;

            return [
                'token' => $token,
            ];
        }

        return response([
            'error' => 'Invalid Credentials !'
        ], Response::HTTP_UNAUTHORIZED);

    }

    public function register(RegisterRequest $request) {

        $user = User::create([
            'name' => $request->input('name'),
            'email' =>  $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return response($user, Response::HTTP_ACCEPTED);

    }
}
