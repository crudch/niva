<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereParentId(0)
            ->with('children')
            ->get();

        return view('categories.index', compact('categories'));
    }
}
