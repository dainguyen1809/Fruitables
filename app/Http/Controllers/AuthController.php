<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signin() {
        return view('account.signin');
    }
    public function signup() {
        return view('account.signup');
    }
    public function signout() {
        return view('account.signin');
    }
}
