<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function index()
    {
        return view('welcome');
    }

    public function login(UserRequest $request)
    {
        $request->validated(); // return validation errors to page if theres is any

        // trim all user inputs
        $request->request->replace(array_map('trim', $request->request->all()));

        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
            return redirect()->to('/')
                ->withErrors(
                    ['credentials_error' => 'user name(email) or password is wrong']
                )
            ;
        }
        else{
            Auth::attempt($credentials);
            return redirect('/panel');
        }    
    }
}
