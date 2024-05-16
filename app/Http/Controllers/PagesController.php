<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('Pages/about');
    }

    public function login()
    {
        return view('Pages/login')->with('title', 'Login');
    }

    public function register()
    {
        return view('Pages/register')->with('title', 'Register');
    }
    public function contact()
    {
        return view('Pages/contact')->with('title', 'Contact');
    }
}

