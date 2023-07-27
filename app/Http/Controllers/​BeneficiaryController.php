<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ​BeneficiaryController extends Controller
{
    public function index()
    {
        return view('beneficiary.detail');
    }

    public function detail()
    {
        return view('beneficiary.detail');
    }
}
