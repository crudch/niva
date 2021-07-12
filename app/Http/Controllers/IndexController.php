<?php

namespace App\Http\Controllers;

use App\Models\Category;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::sorted()
            ->where('parent_id', 0)
            ->get();
        
        return view('index', compact('categories'));
    }
}
