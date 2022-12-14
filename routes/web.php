<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/courses', function () {
    return view('pages.courses');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/team', function () {
    return view('pages\team');
});

Route::get('/testimonial', function () {
    return view('pages\testimonial');
});