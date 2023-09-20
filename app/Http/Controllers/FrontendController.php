<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function Contact_us()
    {
        return view('contact');
    }
    public function About()
    {
        return view('aboutus');
    }
}
