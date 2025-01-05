<?php

use App\Livewire\Blog;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\VehicleController;
use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Front\TourPackageController;
use App\Http\Controllers\Front\VehicleCategoryController;
use App\Http\Controllers\Front\TermAndConditionController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

//blog
Route::get('blog', [BlogController::class, 'blog'])->name('blog');
Route::POST('/articles/search', [BlogController::class, 'blog'])->name('search');
Route::get('/p/blog/{slug}', [BlogController::class, 'show']);
Route::get('/articles', [BlogController::class, 'index']);

//categoryblog
Route::get('article-category/{slug}', [CategoryController::class, 'index']);
Route::get('all-category', [CategoryController::class, 'allcategory']);

//vehicle
Route::get('vehicle', [VehicleController::class, 'vehicle'])->name('vehicle');
Route::get('/vehicles', [VehicleController::class, 'index']);

//regulation
Route::get('regulation', [TermAndConditionController::class, 'regulation'])->name('regulation');

//contact
Route::get('contact', [ContactController::class, 'contact'])->name('contact');

//tour-package
Route::get('tour_package', [TourPackageController::class, 'tour_package'])->name('tour_package');
Route::get('/p/tour-package/{slug}', [TourPackageController::class, 'show']);
Route::get('/package-tour', [TourPackageController::class, 'index']);
