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
Route::get('/', [
    'as' => 'show', 'uses' =>'PagesController@getIndex',
]);

Route::get('/users/create', 'AdminController@create')->name('users.create');

Route::get('/showa/{id}', [
    'as' => 'showa', 'uses' => 'AdminController@show']);

Route::delete('/users/{id}', 'AdminController@destroy')->name('users.destroy');

Route::post('/users', 'AdminController@store')->name('users.store');

Route::get('/users/{id}/edit', 'AdminController@edit')->name('users.edit');

Route::put('users/{id}', 'AdminController@update')->name('users.update');


Route::get('/erasmus', 'PodujatiaController@getPodujatia');
Route::get('/details/{id}', 'detailsController@getErasmusId')->name('erasmus.details');




Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
Route::get('/edit', 'AdminController@table')
    ->middleware('is_admin')
    ->name('edit');

Route::get('/referent', 'AdminController@referent')
    ->middleware('is_admin')
    ->name('referent');


Route::get('/ucasnik', 'AdminController@ucasnik')
    ->middleware('is_ucasnik')
    ->name('ucasnik');
Route::get('/seminar', 'AdminController@ucasnik_inf_sem')
    ->middleware('is_ucasnik')
    ->name('seminar');
Route::get('/ziadosti', 'AdminController@ziadosti')
    ->middleware('is_ucasnik')
    ->name('ziadosti');
Route::get('/formular/{id}', 'AdminController@formular')
    ->middleware('is_ucasnik')
    ->name('potvrdene.formular');

Route::post('/pridat', 'AdminController@pridat')->name('formular.pridat');



Route::get('/potvrdene/{users_id}', 'AdminController@getPatvdeneId')
    ->middleware('is_ucasnik')
    ->name('potvrdenie.details');


Route::get('/show/{id}', [
    'as' => 'show', 'uses' => 'AdminController@ShowAction'
]);

Route::get('/add', [
    'as' => 'add', 'uses' => 'AdminController@getAddUserForm'
]);

Route::post('/insert', [
    'as' => 'insert', 'uses' => 'AdminController@insertAction'
]);

Route::get('/AllUsers', [
    'as' => 'AllUsers', 'uses' => 'AdminController@table'
]);

Route::post('/update/{id}', [
    'as' => 'update', 'uses' => 'AdminController@updateAction'
]);


Route::get('kontakt', [
   'as' => 'show', 'uses' =>'PagesController@getKontakt'
]);
Route::get('index', [
    'as' => 'show', 'uses' =>'PagesController@getIndex',
]);

Route::get('login', [
    'as' => 'show', 'uses' =>'PagesController@getLogin'
]);
Route::get('staz', [
    'as' => 'show', 'uses' =>'PagesController@getStaz'
]);
Route::get('faktultný_koordinatori', [
    'as' => 'show', 'uses' =>'PagesController@getfaktkoord'
]);
Route::get('odd_medzin_vzt', [
    'as' => 'show', 'uses' =>'PagesController@getodd_medzin_vzt'
]);
Auth::routes();
Route::get('/home', 'PagesController@getIndex')->name('home');
Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');

Route::get('contactus', 'ContactUsController@getContactus');
Route::post('contactus', 'ContactUsController@postContactus')->name('contactus');