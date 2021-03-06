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
    return view('index');
})->name('index');

Route::get('/template', function () {
    return view('template');
})->name('template');

Route::get('/picture', function () {
    return view('picture');
})-> name('picture');
Route::get('/caption', function () {
    return view('caption');
})-> name('caption');