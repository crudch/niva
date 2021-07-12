<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', 0)
            ->take(8)
            ->get();

        $articles = Article::latest('id')
            ->take(3)
            ->get();

        return view('index', compact('categories', 'articles'));
    }
}
