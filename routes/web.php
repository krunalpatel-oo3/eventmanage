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

// Route::get('/admin/login', function(){
// 	return view('login_page');
// });
/* Admins Url */
Route::get('admin/login','adminpanel@index')->name('admin.login_page');
Route::post('admin/login_process','adminpanel@login_process')->name('admin.login_process');
Route::post('admin/email_exist','adminpanel@email_exist')->name('admin.email_exist');
Route::get('admin/logout','adminpanel@logout')->name('admin.logout');

//After Admin login

// Route::get('admin/home', 'Home@index')->name('home.dashboard');

Route::get('admin/myprofile', 'admin\Dashboard@myProfile')->name('admin.myprofile');
Route::post('admin/editprofile', 'admin\Dashboard@editprofile')->name('admin.editprofile');

// Route::group(['middleware'=> ['UserAuth']], function(){
Route::get('admin/login','adminpanel@index')->name('admin.login_page');
Route::group(['middleware'=> ['IsAdmin']], function(){
	/* Admin Authentication  */
	Route::get('admin/dashboard', 'admin\Dashboard@index')->name('admin.dashboard');
	Route::get('admin/change_password', 'admin\Dashboard@change_password')->name('admin.change_password');
	Route::post('admin/edit_password', 'admin\Dashboard@edit_password')->name('admin.edit_password');
	/* ********** code for users module ********** */
	Route::get('admin/users', 'admin\Users@index')->name('admin.users');
	Route::post('admin/changeUserStatus', 'admin\Users@changeUserStatus')->name('admin.user_change_status');
	Route::post('admin/user_delete', 'admin\Users@userDelete')->name('admin.user_delete');
	Route::get('admin/user_edit/{id}', 'admin\Users@userEditPage')->name('admin.user_edit_page');
	Route::post('admin/edit_user', 'admin\Users@userEdit')->name('admin.edit_user');
	
	// Route::get('admin/login','adminpanel@index')->name('admin.login_page');

	// Route::get('admin/dashboard', function(){
	// 	 // if(!session()->has('admin_user')){
	//   //           return redirect('admin/login');
	//   //           exit;
	//   //       }
	//         return view('admin/dashboard');
	// });

});