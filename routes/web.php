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
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/equip', function () {
    return view('equip');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/others', function () {
    return view('others');
});
Route::get('/personal', function () {
    return view('personal');
});
Route::get('/trainers', function () {
    return view('trainers');
});
