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
    return view('welcome');
});


// route dasar

Route::get('/welcome', function (){
    return "selamat datang";
});


Route::get('/beranda/news', function (){
    return " Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quasi porro obcaecati iure debitis provident hic ullam mollitia corporis officia. ";
});



// route dengan view

Route::get('/berita', function(){
    return view('user.berita.index');
});

Route::get('/berita/detail', function(){
    return view('user.berita.show');
});



