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

Route::get('/', function () { return view('index'); });   //For Homepage. 


Route::get('/admin/login', 'AdminController@login');   //For Admin Login
Auth::routes();




// Route::get('/admin/dashboard', 'AdminController@dashboard'); //For Dashboard

Route::get('/admin', 'AdminController@view'); 

Route::get('/home', 'HomeController@index')->name('home');
