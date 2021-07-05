<?php

namespace App\Http\Controllers;

use App\Models\Rubric;
use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $rubrics = Rubric::withCount('articles')
            ->get();

        $articles = Article::latest('id')
            ->paginate(3);

        $news = Article::latest('id')
            ->take(3)
            ->get();

        return view('blog.index', compact('rubrics', 'articles', 'news'));
    }

    public function rubric(Rubric $rubric)
    {
        $articles = $rubric->articles()
            ->latest('id')
            ->paginate(3);

        return view('blog.rubric', compact('rubric', 'articles'));
    }

    public function show(string $rubric_slug, Article $article)
    {
        if ($article->rubric->slug !== $rubric_slug) {
            abort(404);
        }

        return view('blog.show', compact('article'));
    }
}
