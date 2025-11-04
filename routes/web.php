<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/login', function () {
    return view('auth.login'); // perhatikan: gunakan "auth.login" dengan titik
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');