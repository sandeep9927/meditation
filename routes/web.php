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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('verify/{email}/{token}','Auth\RegisterController@verifyUser')->name('verify');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('profile','UserProfileController@show');
Route::get('user/profile/{id}','UserProfileController@edit');
Route::post('profile/update/{id}','UserProfileController@update');

// <------------Admin Route---------->

Route::view('create_user', 'admin.create_user');
Route::view('create_writer', 'admin.create_writer');
Route::view('cms_user', 'admin.cms_user');
Route::view('site_user', 'admin.site_user');
Route::view('site_user', 'admin.site_user');
Route::view('create_department', 'admin.create_department');
Route::view('create_story', 'admin.create_story');
Route::view('create_faq', 'admin.create_faq_cat');
Route::view('create_bie', 'admin.create_bie');
Route::view('create_panel_cat', 'admin.create_panel_cat');
Route::view('create_childe_cat', 'admin.create_childe_cat');
Route::view('banner_management', 'admin.banner_management');
Route::view('create_faq', 'admin.create_faq');

Route::get('create_user','UserController@create');
Route::post('store','UserController@store');
Route::get('site_user','UserController@site_user');
Route::get('site_user/{id}/edit','UserController@edit');
Route::post('site_user/{id}','UserController@update');
Route::get('site_user/{id}/delete','UserController@destroy');
Route::get('cms_user','UserController@cms_user');

Route::get('admin','UserController@Admin');
Route::post('dashboard','UserController@AdminLogin');