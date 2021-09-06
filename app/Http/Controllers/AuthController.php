<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //login authentication
    function login() {
        return view('auth.Login');
    }
    //register authentication
    function register() {
        return view('auth.Register');
    }
}
