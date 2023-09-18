<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TawafeeqController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function login_page()
    {
        return view('login_page');
    }

}
