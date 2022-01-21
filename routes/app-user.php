<?php

use Illuminate\Support\Facades\Route;

Route::prefix('user')
    ->group(function () {
        Route::get('/', function () {
            return 'show all user';
        })->name('user.all');

        Route::get('contoh/{param1?}/{param2?}', function ($param1 = 'param1', $param2 = 'dua') {
            return $param1 . ' - ' . $param2;
        })->name('user.contoh');

        Route::get('{id}/foo', function ($id) {
            return $id;
        })->where('id', '.*')->name('user.foo');
    });

// /user/all
// /user/{id}
// /user/upload
