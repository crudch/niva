<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;


Route::get('/', [IndexController::class, 'index'])
    ->name('home');

Route::group([
    'prefix' => 'blog',
    'as'     => 'blog.'
], static function () {
    Route::get('/', [BlogController::class, 'index'])
        ->name('index');
    Route::get('/{rubric}', [BlogController::class, 'rubric'])
        ->name('rubric');
    Route::get('/{rubric_slug}/{article}', [BlogController::class, 'show'])
        ->name('show');
});

Route::group([
    'prefix' => 'reviews',
    'as'     => 'reviews.'
], static function () {
    Route::get('/', [CategoryController::class, 'index'])
        ->name('index');

    Route::get('/{category1}/{category2?}/{product?}', [TestController::class, 'index'])
        ->name('test');
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

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/test', static function () {
    $categories = Category::getTreeCategories();

    dump($categories);
});