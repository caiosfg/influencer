<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        return User::paginate();
    }

    public function show($id) {
        return User::find($id);
    }

    public function store(UserCreateRequest $request) {

        $user = User::create([
            'name' => $request->input('name'),
            'email' =>  $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return response($user, 201);
    }

    public function update(UserUpdateRequest $request, $id) {

        $user = User::find($id);

        $user->update($request->only('name', 'email', 'password'));

        return response($user, 202);
    }

    public function destroy($id) {

        User::destroy($id);

        return response(null, 204);
    }

}
