<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return User::all();
    }

    public function show($id) {
        return User::find($id);
    }

    public function store(Request $request) {

        $user = User::create($request->all());

        return response($user, 201);
    }

    public function update(Request $request, $id) {

        $user = User::find($id);

        $user->update($request->all());

        return response($user, 202);
    }

    public function destroy($id) {

        User::destroy($id);

        return response(null, 204);
    }

}
