<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $title = 'Masuk';
        return view('auth.login', compact('title'));
    }
    public function register(){
        $title = 'Daftar';
        return view('auth.register',compact('title'));
    }
}
