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

Route::get('/about', function () {
    return view('about');
});

Route::get('/methods', function () {
    return view('methods');
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/historical', function () {
    return view('historical');
});

Route::get('/bau', function () {
    return view('bau');
});

Route::get('/ggp', function () {
    return view('ggp');
});

Route::get('/', function () {
    return view('index');
});
