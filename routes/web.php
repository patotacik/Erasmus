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

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

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
Route::get('staz', [
    'as' => 'show', 'uses' =>'PagesController@getStaz'
]);
Route::get('details', [
    'as' => 'show', 'uses' =>'PagesController@getDetails'
]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');