<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($category1, $category2 = null, $product = null)
    {
        if (null !== $category2) {
            $category = Category::where('slug', $category2)
                ->with('parent')
                ->firstOrFail();

            if ($category1 !== $category->parent->slug) {
                abort(404);
            }

            return view('categories.child', compact('category'));
        }
    }
}
