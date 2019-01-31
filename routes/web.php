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

Route::get('/', 'MainController@index');
Route::post('results', 'MainController@search_results');

Route::get('profile', 'MainController@profile');
Route::post('profile/search', 'MainController@profile_search');

Route::get('result/create', 'MainController@result_create');
Route::get('/get-transcript/{id}/{title}', 'MainController@get_transcript');
Route::post('result/create', 'MainController@result_store');

Auth::routes();

$this->get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('admin/login', 'Auth\LoginController@login');
$this->post('admin/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'MainController@dashboard')->name('dashboard');
Route::get('/home', 'MainController@dashboard')->name('dashboard-home');
