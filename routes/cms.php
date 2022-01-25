<?php

use App\Http\Controllers\Cms\ArticleController;
use App\Http\Controllers\Cms\RoleController;
use Illuminate\Support\Facades\Route;

Route::prefix('cms')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', function () {
            return view('cms.dashboard');
        })->name('cms.dashboard');

        Route::resource('article', ArticleController::class)->names('cms.articles')->middleware('can:cms.articles.index');
        Route::resource('role', RoleController::class)->names('cms.roles')->middleware('can:cms.roles.index');
        Route::post('role/{role}/assign', [RoleController::class, 'assignPermission'])->name('cms.roles.assign_permission')->middleware('can:cms.roles.create');
    });

