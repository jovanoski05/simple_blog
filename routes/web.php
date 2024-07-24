<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index']);

Route::get('/posts/create', function(){
    return view("posts.create");
})->middleware('auth');

Route::get('/login', [SessionsController::class, 'login'])->name('login');

Route::get('/register', [SessionsController::class, 'register']);

