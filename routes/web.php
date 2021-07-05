<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


Route::get('/', function () {
    return view('index');
});

Route::group([
    'prefix' => 'blog',
    'as' => 'blog.'
], static function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/{rubric_slug}/{article}', [BlogController::class, 'show'])->name('show');
});



Route::get('/single', function () {
    return view('single');
});


Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/blog-category', function () {
    return view('blog-category');
});

Route::get('/profile', function () {
    return view('profile');
});