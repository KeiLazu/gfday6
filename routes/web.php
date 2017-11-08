<?php

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
    return view('welcome');
});

Route::get('/hello', function() {
    return view('hello');
});

Route::get('/haihai', function () {
    return view('haihai');
});

Route::get('/calculator', function () {
    return view('calculator');
});

Route::get('/calv2input', function () {
    return view('calv2input');
});

Route::post('/calv2output', function () {
    return view('calv2output');
});

Route::get('/calv3input', function () {
    return view('calv3input');
});

Route::resource('/calv3output', 'contCalculator');
Route::post('/calv3output', 'calculation@calculate')->name('calculation');
