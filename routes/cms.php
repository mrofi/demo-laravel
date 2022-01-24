<?php

use App\Http\Controllers\Cms\ArticleController;
use Illuminate\Support\Facades\Route;

Route::prefix('cms')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', function () {
            return view('cms.dashboard');
        })->name('cms.dashboard');

        Route::resource('article', ArticleController::class)->names('cms.articles');
    });

