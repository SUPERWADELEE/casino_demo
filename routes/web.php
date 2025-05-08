<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('kg3399.mobile');
// });

Route::get('/mall', function () {
    return view('kg3399.mall');
});

Route::get('/error', function () {
    return view('casino.error');
});
Route::get('/activite', function () {
    return view('casino.activite');
});
// Route::get('/mobile', function () {
//     return view('mobile');
// });

Route::get('/', function (\Illuminate\Http\Request $request) {
    $userAgent = $request->header('User-Agent');

    if (preg_match('/iPhone|Android|Mobile/i', $userAgent)) {
        return view('casino.mobile');
    } else {
        return view('casino.index');
    }
});


