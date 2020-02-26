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
    return view('login');
});


Route::get('/dashboard', 'DashboardController@home');
Route::get('/createIncoming', 'DashboardController@createIncoming');
Route::get('/createOutgoing', 'DashboardController@createOutgoing');
