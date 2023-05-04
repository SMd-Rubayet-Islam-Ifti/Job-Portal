<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::post('registration-form',[Login::class,'Insert'])->name('registration-form');
Route::post('login-form', [Login::class, 'login'])->name('login-form');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

