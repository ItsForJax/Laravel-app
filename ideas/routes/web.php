<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home route [GET]
Route::get('/', function () {
    return view('welcome');
});

// feed page
Route::get('/feed', function () {
    return view('feed');
});

// profile page
Route::get('/profile', function () {
    return view('users.profile');
});

