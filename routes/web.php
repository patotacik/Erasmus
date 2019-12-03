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
Route::delete('/events/{id}', 'AdminController@EventDestroy')->name('events.destroy');
<<<<<<< HEAD
Route::delete('/univerzity/{id}', 'AdminController@UniverzityDestroy')->name('univerzity.destroy');

Route::post('/users', 'AdminController@store')->name('users.store');
Route::post('/events', 'AdminController@EventStore')->name('events.store');
Route::post('/univerzity', 'AdminController@UniverzityStore')->name('univerzity.store');

Route::get('/users/{id}/edit', 'AdminController@edit')->name('users.edit');
Route::get('/events/{id}/edit', 'AdminController@EventEdit')->name('events.edit');
Route::get('/univerzity/{id}/edit', 'AdminController@UniverzityEdit')->name('univerzity.edit');

Route::put('users/{id}', 'AdminController@update')->name('users.update');
Route::put('events/{id}', 'AdminController@EventUpdate')->name('events.update');
Route::put('univerzity/{id}', 'AdminController@UniverzityUpdate')->name('univerzity.update');
=======
<<<<<<< HEAD
Route::delete('/univerzity/{id}', 'AdminController@UniverzityDestroy')->name('univerzity.destroy');

Route::post('/users', 'AdminController@store')->name('users.store');
Route::post('/events', 'AdminController@EventStore')->name('events.store');
Route::post('/univerzity', 'AdminController@UniverzityStore')->name('univerzity.store');

Route::get('/users/{id}/edit', 'AdminController@edit')->name('users.edit');
Route::get('/events/{id}/edit', 'AdminController@EventEdit')->name('events.edit');
Route::get('/univerzity/{id}/edit', 'AdminController@UniverzityEdit')->name('univerzity.edit');

Route::put('users/{id}', 'AdminController@update')->name('users.update');
Route::put('events/{id}', 'AdminController@EventUpdate')->name('events.update');
Route::put('univerzity/{id}', 'AdminController@UniverzityUpdate')->name('univerzity.update');
=======

Route::post('/users', 'AdminController@store')->name('users.store');
Route::post('/events', 'AdminController@EventStore')->name('events.store');

Route::get('/users/{id}/edit', 'AdminController@edit')->name('users.edit');
Route::get('/events/{id}/edit', 'AdminController@EventEdit')->name('events.edit');


Route::put('users/{id}', 'AdminController@update')->name('users.update');
Route::put('events/{id}', 'AdminController@EventUpdate')->name('events.update');
>>>>>>> 3ddf8d0e5524e3bc31e5d258f41cceb4fccb89d1






>>>>>>> 9e60e9e3e78b670925703aabb2b8d502101b3c4e

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
<<<<<<< HEAD

=======
>>>>>>> 9e60e9e3e78b670925703aabb2b8d502101b3c4e
Route::get('/ucasnik', 'AdminController@ucasnik')
    ->middleware('is_ucasnik')
    ->name('ucasnik');

Route::get('/seminar', 'AdminController@ucasnik_inf_sem')
    ->middleware('is_ucasnik')
    ->name('seminar');

<<<<<<< HEAD
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

=======
>>>>>>> 9e60e9e3e78b670925703aabb2b8d502101b3c4e
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

Route::get('/AllEvents', [
    'as' => 'AllEvents', 'uses' => 'AdminController@EventsTable'
]);

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9e60e9e3e78b670925703aabb2b8d502101b3c4e
Route::get('/AllUniverzity', [
    'as' => 'AllUniverzity', 'uses' => 'AdminController@UniverzityTable'
]);

<<<<<<< HEAD
=======
=======
>>>>>>> 3ddf8d0e5524e3bc31e5d258f41cceb4fccb89d1
>>>>>>> 9e60e9e3e78b670925703aabb2b8d502101b3c4e
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

<<<<<<< HEAD
Route::get('faktultný_koordinatori', [
    'as' => 'show', 'uses' =>'PagesController@getfaktkoord'
]);

Route::get('odd_medzin_vzt', [
    'as' => 'show', 'uses' =>'PagesController@getodd_medzin_vzt'
]);

=======
>>>>>>> 9e60e9e3e78b670925703aabb2b8d502101b3c4e
Auth::routes();
Route::get('/home', 'PagesController@getIndex')->name('home');
Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');
<<<<<<< HEAD
Route::get('contactus', 'ContactUsController@getContactus');
Route::post('contactus', 'ContactUsController@postContactus')->name('contactus');
=======
>>>>>>> 9e60e9e3e78b670925703aabb2b8d502101b3c4e
