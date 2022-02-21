<?php

use Illuminate\Support\Facades\Route;

/*
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('layouts/admin');
});

Route::get('/dashboard', function () {
    return view('admin-dashboard');
});