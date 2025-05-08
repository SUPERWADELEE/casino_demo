<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('kg3399.index');
});

Route::get('/mall', function () {
    return view('kg3399.mall');
});

Route::get('/error', function () {
    return view('kg3399.error');
});
Route::get('/activite', function () {
    return view('kg3399.activite');
});
