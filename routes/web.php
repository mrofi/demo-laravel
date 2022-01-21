<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('homepage');
Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('contact-us', [ContactController::class, 'form'])->name('contact.form');
Route::post('contact-us', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('authors/{slug}', [AuthorController::class, 'show'])->name('authors.show');




