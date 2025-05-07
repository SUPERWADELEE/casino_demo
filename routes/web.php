<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('kg3399.index');
});

Route::get('/mall', function () {
    return view('kg3399.mall');
});

Route::get('/error', function () {
    return view('kg3399.error');
});

