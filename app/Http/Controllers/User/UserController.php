<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    //
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::find($id)->load('venues');
    }
}
