<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('compro.login');
    }

    public function logout()
    {
        return view('compro.home');
    }
}
