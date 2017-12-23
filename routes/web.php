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

Route::get('admins/rooms','RoomController@listAllRoom');
Route::get('admins/rooms/create','RoomController@createRoom');
Route::get('admins/rooms/{room}/edit','RoomController@editRoom');
Route::get('admins/rooms/{room}/delete', 'RoomController@deleteRoom');
Route::get('admins/rooms/{room}', 'RoomController@roomDetail');
Route::post('admins/rooms/search','RoomController@searchRoom');
Route::post('admins/rooms', 'RoomController@saveRoom');
Route::put('admins/rooms/{room}', 'RoomController@updateRoom');

Route::get('admins/roomTypes','RoomTypeController@listAllRoomType');
Route::get('admins/roomTypes/create','RoomTypeController@createRoomType');
Route::get('admins/roomTypes/edit','RoomTypeController@editRoomType');

Route::get('admins/services','ServiceController@listAllService');
Route::get('admins/services/create','ServiceController@createService');
Route::get('admins/services/{service}/edit','ServiceController@editService');
Route::post('admins/services', 'ServiceController@saveService');
Route::get('admins/services/{service}/delete', 'ServiceController@deleteService');
Route::put('admins/services/', 'ServiceController@updateService');
Route::get('admins/services/{service}', 'ServiceController@serviceDetail');

Route::get('admins/users','userController@listAllUser');
Route::get('admins/users/{user}/edit','userController@editUser');
Route::post('admins/users', 'userController@saveUser');
Route::get('admins/users/{user}/delete', 'userController@deleteUser');
Route::put('admins/users/', 'userController@updateUser');

//hotel
Route::get('/index', function () {
    return view('index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
