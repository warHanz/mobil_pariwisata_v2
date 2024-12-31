<?php

namespace App\Http\Controllers\Front;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\VehicleCategory;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    public function vehicle()
    {
        // Mendapatkan keyword dari request
        $keyword = request()->keyword;

        // Jika keyword ada, kita filter berdasarkan judul artikel
        if ($keyword) {
            // Mengambil artikel dengan relasi 'VehicleCategory' dan 'User'
            $vehicles = Vehicle::with(['VehicleCategory'])
                ->whereStatus(1)
                ->where('title', 'like', '%' . $keyword . '%')
                ->latest()
                ->paginate(2); // Pastikan hanya paginate yang digunakan
        } else {
            // Jika tidak ada keyword, ambil artikel terbaru tanpa filter
            $vehicles = Vehicle::with(['VehicleCategory'])
                ->whereStatus(1)
                ->latest()
                ->paginate(2); // Gunakan paginate yang sama
        }

        // Mengambil artikel terbaru
        $latest_post = Vehicle::latest()->first();

        // Mengambil semua kategori artikel
        $vehicle_categories = VehicleCategory::latest()->get();

        return view('frontend.Vehicle.index', [
            'latest_post' => $latest_post,
            'vehicles' => $vehicles,
            'keyword' => $keyword,
            'vehicle_categories' => $vehicle_categories,
        ]);
    }

    public function show($slug)
    {
        // Mencari artikel berdasarkan slug
        $vehicle = Vehicle::with(['VehicleCategory']) // Eager load 'VehicleCategory' dan 'User'
            ->whereSlug($slug)
            ->firstOrFail();

        // Increment view count
        $vehicle->increment('views');

        // Mengambil semua kategori artikel
        $vehicle_categories = VehicleCategory::latest()->get();

        return view('frontend.Vehicle.show', [
            'Vehicle' => $vehicle,
            'Vehicle_categories' => $vehicle_categories,
        ]);
    }
}
