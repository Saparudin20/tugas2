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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/coaching', function () {
    return view('coaching');
});
Route::get('/cantact', function () {
    return view('contact');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/time', function () {
    return view('time');
});

Route::get ('/template', function(){
	return view ('template.base');
});

Route::get ('/admin', function(){
	return view ('admin.admin');
});

Route::get('/welcome2', function () {
    return view('welcome2');
});

Route::get('/about2', function () {
    return view('about2');
});
Route::get('/coaching2', function () {
    return view('coaching2');
});
Route::get('/cantact2', function () {
    return view('contact2');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/time2', function () {
    return view('time2');
});

Route::get ('/template2', function(){
	return view ('template.base2');
});

Route::get ('/admin2', function(){
	return view ('admin.admin2');
});