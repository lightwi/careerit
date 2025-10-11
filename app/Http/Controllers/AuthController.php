<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function signup()
    {
        return view('auth.signup');
    }
    public function forgetpass()
    {
        return view('auth.forgetpass');
    }
    public function otpverify()
    {
        return view('auth.otpverify');
    }
    public function changepass()
    {
        return view('auth.changepass');
    }
}
