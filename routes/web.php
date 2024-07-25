<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/Registration', function () {
//     return view('Registration');
// });

Route::get('/contact us', function () {
    return view('contact us');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pages-faq', function () {
    return view('pages-faq');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/table-data', function () {
    return view('table-data');
});


// Route::get('/', 'Controller@index')->name('home');
// Route::get('/about', 'Controller@index')->name('about');
// Route::get('/contact', 'Controller@index')->name('contact');