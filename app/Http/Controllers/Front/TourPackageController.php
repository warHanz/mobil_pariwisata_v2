<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourPackageController extends Controller
{
    public function tour_package()
    {
        return view('frontend.tour-package.index');
    }
}
