<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index()
    {
        return view('app.articles');
    }

    public function show($slug)
    {
        return view('app.article-detail');
    }
}
