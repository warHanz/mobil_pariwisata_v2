<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil kategori berdasarkan ID, misalnya 1 = City Car, 2 = MPV, dst.
        $cityCars = Vehicle::where('status', 1)
            ->whereHas('vehicleCategory', function ($query) {
                $query->where('id', 1); // ID untuk City Car
            })
            ->get();

        $mpvs = Vehicle::where('status', 1)
            ->whereHas('vehicleCategory', function ($query) {
                $query->where('id', 2); // ID untuk MPV
            })
            ->get();

        $microBuses = Vehicle::where('status', 1)
            ->whereHas('vehicleCategory', function ($query) {
                $query->where('id', 3); // ID untuk Micro Bus
            })
            ->get();

        $buses = Vehicle::where('status', 1)
            ->whereHas('vehicleCategory', function ($query) {
                $query->where('id', 4); // ID untuk Bus
            })
            ->get();

        $trucks = Vehicle::where('status', 1)
            ->whereHas('vehicleCategory', function ($query) {
                $query->where('id', 5); // ID untuk Truck
            })
            ->get();

        return view('frontend.homepage', compact('cityCars', 'mpvs', 'microBuses', 'buses', 'trucks'));
    }
}
