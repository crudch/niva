<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($category1, $category2 = null, $product = null)
    {
        if (null !== $product) {
            return $this->product($product);
        }

        if (null !== $category2) {
            return $this->second($category1, $category2);
        }

        return $this->first($category1);
    }

    protected function first($category1)
    {
        $category = Category::where('slug', $category1)
            ->with('children')
            ->firstOrFail();

        return view('categories.first', compact('category'));
    }

    protected function second($category1, $category2)
    {
        $category = Category::where('slug', $category2)
            ->with('parent')
            ->firstOrFail();

        if ($category1 !== $category->parent->slug) {
            abort(404);
        }

        return view('categories.second', compact('category'));
    }

    protected function product($slug)
    {
        // Проверки на существование категорий продукта
        return view('products.show');
    }
}
