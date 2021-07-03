<?php

use App\Models\Rubric;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/test', function () {
    $articles = Article::latest('id')
        ->with('rubric')
        ->where('rubric_id', 1)
        ->take(30)
        ->get();

    foreach ($articles as $article) {
        dump($article->toArray());
    }
});
