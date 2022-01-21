<?php

namespace App\Http\Controllers;

class AuthorController extends Controller
{
    public function index()
    {
        return view('app.authors');
    }

    public function show($slug)
    {
        //
    }
}
