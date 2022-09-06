<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    function showlogin(){
        return view('frontview.login');
    }

    function showregister(){
        return view('frontview.register');
    }

    function showlogin2(){
        return view('BackView.login2');
    }

    function logout(){
        Auth::logout();
        return redirect('frontview.login');
    }
}
