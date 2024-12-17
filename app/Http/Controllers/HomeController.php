<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.homepage');
    }

    // public function tentang()
    // {
    //     return view('frontend.tentang');
    // }

    // public function contact()
    // {
    //     return view('frontend.contact');
    // }

    // public function semuamobil()
    // {
    //     return view('car.semuamobil');
    // }
}
