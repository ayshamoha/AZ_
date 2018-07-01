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
    return view('main');
});
Route::get('register',function ()
	{return view('register');
});

Route::get('login',function ()
	{return view('login');
});

Route::get('forgot-password',function ()
	{return view('forgot-password');
});

Route::resource('Owner','OwnerController');
Route::resource('ParkingArea','ParkingAreaController');
Route::resource('Card','CardController');
Route::get('/image',function(){

	return view('image');
});
