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
    return view('home', [
    "title" => "Home",
    "name" => "Deni Ramadhan",
    "image" => "deniramadhan.jpg"
    ] );
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
    ]);
});

Route::get('/project', function () {
    return view('project',[
        "title" => "project",
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "title" => "contact",
    ]);
});