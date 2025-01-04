<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/hobbies', function () {
    return view('hobbies');
});

Route::get('/contact', function () {
    return view('contact');
});
