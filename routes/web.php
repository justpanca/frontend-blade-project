<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/trainers', function () {
    return view('trainers');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/coursedetails', function () {
    return view('coursedetails');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

