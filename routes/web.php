<?php

use App\Livewire\Blog;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Front\InfowisataController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('infowisata', [InfowisataController::class, 'infowisata'])->name('infowisata');

Route::POST('/articles/search', [InfowisataController::class, 'infowisata'])->name('search');
Route::get('/p/{slug}', [InfowisataController::class, 'show']);
Route::get('/articles', [InfowisataController::class, 'index']);

Route::get('article-category/{slug}', [CategoryController::class, 'index']);
Route::get('all-category', [CategoryController::class, 'allcategory']);
