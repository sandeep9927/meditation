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

Route::get('/contact','ContactController@show');
Route::post('/contact/send','ContactController@mail');

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/working', function () {
    return view('how_it_works');
});

Route::get('/admin_login', function () {
    return view('admin.admin_login');
});

Route::get('/admin', function () {
    return view('admin.create_user');
});

Route::get('/cms_user', function () {
    return view('admin.cms_user');
});

Route::get('/site_user', function () {
    return view('admin.site_user');
});

Route::get('/writer_mgmt', function () {
    return view('admin.writer_mgmt');
});

Route::get('/dep_mgmt', function () {
    return view('admin.department_mgmt');
});

Route::get('/story_mgmt', function () {
    return view('admin.story_mgmt');
});

Route::get('/faq_mgmt', function () {
    return view('admin.faqs_mgmt');
});

Route::get('/faq_cat_mgmt', function () {
    return view('admin.faq_cat_mgmt');
});

Route::get('/bie_mgmt', function () {
    return view('admin.bie_mgmt');
});
Route::get('/tech_cat_mgmt', function () {
    return view('admin.techniques_cat_mgmt');
});

Route::get('/banner_mgmt', function () {
    return view('admin.banner_mgmt');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('verify/{email}/{token}','Auth\RegisterController@verifyUser')->name('verify');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('profile','UserProfileController@show');
Route::get('profile/{id}/edit','UserProfileController@edit');
Route::post('profile/update','UserProfileController@update');
Route::view('edit','profiles.edit_profile');
