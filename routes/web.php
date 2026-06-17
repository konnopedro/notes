<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/oi', function () {
    echo "Oi";
});
Route::get('/oi/oo', function () {
    echo "Oo";
});
