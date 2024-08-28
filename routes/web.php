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

Route::get('/', function () {
    return view('Guest.Home.index');
});

Route::get('/about', function () {
    return view('Guest.Home.aboutus');
})->name('about');

Route::get('/contact', function () {
    return view('Guest.Home.contact');
})->name('contact');

Route::get('/bookconsaltation', function () {
    return view('Guest.Home.bookconsaltation');
})->name('bookconsaltation');

Route::get('/articals', function () {
    return view('Guest.Home.articals');
})->name('articals');

Route::get('/register', function () {
    return view('Guest.auth.register');
})->name('register');

Route::get('/login', function () {
    return view('Guest.auth.login');
})->name('login');

Route::get('/OTP', function () {
    return view('Guest.auth.OTP');
})->name('OTP');

Route::get('/resetPassword', function () {
    return view('Guest.auth.resetPassword');
})->name('resetPassword');
