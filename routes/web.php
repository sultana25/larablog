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

Route::get('/','WelcomeController@index'); 
Route::get('/portfolio','WelcomeController@portfolio'); 
Route::get('/services','WelcomeController@services'); 

//admin panel start
Route::get('/admin','AdminController@index');
Route::post('/admin-panel','AdminController@admin_panel');
Route::get('/dashboard','SuperAdminController@index');
Route::get('/logout','SuperAdminController@logout');
//stop admin panel