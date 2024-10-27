<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {

    return 'hello';
})->name('hello');

Route::get('/hello/{name}', function ($name) {
    return $name;
});
