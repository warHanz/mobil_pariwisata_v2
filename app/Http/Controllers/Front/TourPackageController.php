<?php

namespace App\Http\Controllers\Front;

use App\Models\PackageTour;
use App\Models\PackageCategory;
use App\Http\Controllers\Controller;

class TourPackageController extends Controller
{
    public function tour_package()
    {
        // Mengambil data berdasarkan kategori ID (contoh: 1 = One Day, 2 = Two Day, dst.)
        $oneDay = PackageTour::where('status', 1)
            ->whereHas('packageCategory', function ($query) {
                $query->where('id', 1);
            })
            ->get();

        $twoDay = PackageTour::where('status', 1)
            ->whereHas('packageCategory', function ($query) {
                $query->where('id', 2);
            })
            ->get();

        $threeDay = PackageTour::where('status', 1)
            ->whereHas('packageCategory', function ($query) {
                $query->where('id', 3);
            })
            ->get();

        $fourDay = PackageTour::where('status', 1)
            ->whereHas('packageCategory', function ($query) {
                $query->where('id', 4);
            })
            ->get();

        // Mengambil semua kategori
        $package_categories = PackageCategory::latest()->get();

        return view('frontend.tour-package.index', [
            'oneDay' => $oneDay,
            'twoDay' => $twoDay,
            'threeDay' => $threeDay,
            'fourDay' => $fourDay,
            'package_categories' => $package_categories,
        ]);
    }

    public function show($slug)
    {
        try {
            // Mencari tour package berdasarkan slug
            $package_tour = PackageTour::with(['packageCategory'])
                ->whereSlug($slug)
                ->firstOrFail();

            // Increment view count
            $package_tour->increment('views');

            // Mengambil semua kategori
            $package_categories = PackageCategory::latest()->get();

            return view('frontend.tour-package.show', [
                'package_tour' => $package_tour,
                'package_categories' => $package_categories,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Redirect atau tampilkan halaman 404 jika data tidak ditemukan
            return abort(404, 'Tour package not found');
        }
    }
}
