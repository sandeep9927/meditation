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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('verify/{email}/{token}','Auth\RegisterController@verifyUser')->name('verify');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('profile','UserProfileController@show');
Route::get('profile/{id}/edit','UserProfileController@edit');
Route::post('profile/update','UserProfileController@update');
Route::view('edit','profiles.edit_profile');
