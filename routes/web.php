<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', function () {
    //Just redirect
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/reset', function () {
    return view('reset');
});
