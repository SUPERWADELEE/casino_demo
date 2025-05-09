<?php

use Illuminate\Support\Facades\Route;



Route::get('/test', function () {
    return view('casino.test_mall');
});

Route::get('/mall', function (\Illuminate\Http\Request $request) {
    $userAgent = $request->header('User-Agent');

    if (preg_match('/iPhone|Android|Mobile/i', $userAgent)) {
        return view('casino.mobile_mall');
    } else {
        return view('casino.mall');
    }
});

Route::get('/error', function () {
    return view('casino.error');
});
Route::get('/activite', function () {
    return view('casino.activite');
});

Route::get('/', function (\Illuminate\Http\Request $request) {
    $userAgent = $request->header('User-Agent');

    if (preg_match('/iPhone|Android|Mobile/i', $userAgent)) {
        return view('casino.mobile');
    } else {
        return view('casino.index');
    }
});


