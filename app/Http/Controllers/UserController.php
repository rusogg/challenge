<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        return view('welcome');
    }


    public function login(Request $request)
    {
        $credentials = request()->only('email','password');
        if (Auth::attempt($credentials))
        {
            request()->session()->regenerate();
            return redirect('principal');
        }

        return redirect('welcome');
    }


}
