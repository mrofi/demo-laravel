<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with(['category', 'author'])
            ->where('status', Article::STATUS_APPROVED)
            ->where('published_at', '<=', date('Y-m-d'))
            ->paginate(9);

        return view('app.articles', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('app.article-detail', compact('article'));
    }
}
