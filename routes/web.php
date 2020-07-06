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
    return view('welcome');
});

Route::get('/admin/login', function(){
	return view('login_page');
});
/* Admins Url */
Route::get('admin/login','adminpanel@index')->name('admin.login_page');
Route::post('admin/email_exist','adminpanel@email_exist')->name('admin.email_exist');