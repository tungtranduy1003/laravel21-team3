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
    return redirect('/index');
});

//admin
Route::get('/admins', function () {
    if(Auth::check() && Auth::user()->role == 1)
        return view('admins.layouts.index1');
    else
        return redirect('/index');  
});

//hotel
Route::get('/index', function () {
    return view('index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
