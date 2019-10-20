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
    return view('index');
});
Route::get('kontakt', [
   'as' => 'show', 'uses' =>'PagesController@getKontakt'
]);
Route::get('index', [
    'as' => 'show', 'uses' =>'PagesController@getIndex'
]);
Route::get('erasmus', [
    'as' => 'show', 'uses' =>'PagesController@getErasmus'
]);
Route::get('login', [
    'as' => 'show', 'uses' =>'PagesController@getLogin'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
