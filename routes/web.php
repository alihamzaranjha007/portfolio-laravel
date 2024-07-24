<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/custom-url', function () {
//     return view('testpage');
// });

Route::view('testpage', '/testpage');
Route::get('/dashboard', function () {
    return view('dashboards-analytics');
});