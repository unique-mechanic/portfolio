<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;

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

Route::get('/blog', function () {
    $posts = BlogPost::all();
    return view('blog.index', ['posts' => $posts]);
});

//Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

