<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;


Route::get('/', [IndexController::class, 'index'])
    ->name('home');

Route::group([
    'prefix' => 'blog',
    'as'     => 'blog.'
], static function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/{rubric}', [BlogController::class, 'rubric'])->name('rubric');
    Route::get('/{rubric_slug}/{article}', [BlogController::class, 'show'])->name('show');
});


Route::get('/single', function () {
    return view('single');
});


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/reviews-category', function () {
    return view('reviews-category');
});

Route::get('/test', static function () {
    $categories = Category::getTreeCategories();

    dump($categories);
});