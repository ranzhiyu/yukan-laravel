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

Route::get('/b', function () {
    // return view('welcome');
    return '123';
});

Route::get('/xz',function() {
	return view('welcome');
});

Route::get('/yy', function(){
return '123';
});
