<?php

namespace App\Http\Controllers;

class HomePageController extends Controller
{

    public function homepage()
    {
        return view('home.home');
    }

    public function apropos()
    {
        return view('home.apropos');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
