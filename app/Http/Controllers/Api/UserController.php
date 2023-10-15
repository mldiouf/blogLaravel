<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        $users = User::all();
        return response()->json($users);
    }

    public function show($user) {
        $users = User::find($user);
        return response()->json($users);
    }
}
