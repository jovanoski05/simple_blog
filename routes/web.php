<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index']);

Route::get('/posts/create', function(){
    return view("posts.create");
})->middleware('auth');

Route::get('/login', function() {
    return view('sessions.login');
})->name('login');

Route::get('/register', function() {
    return view('sessions.register');
});

