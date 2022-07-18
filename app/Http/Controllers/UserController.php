<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        return view('welcome');
    }

    public function login(UserRequest $request)
    {
        $validated = $request->validated();
    }
}
