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

Route::get('/erasmus', 'podujatiaController@getPodujatia');

Route::get('/searchE', 'podujatiaController@searchE')->name('erasmus.search');
Route::get('/erasmus', 'PodujatiaController@getPodujatia');
Route::get('/filterE', 'podujatiaController@filterE')->name('erasmus.filter');

Route::get('/searchS', 'podujatiaController@searchS')->name('seminar.search');
Route::get('/seminar', 'PodujatiaController@getSeminar');
Route::get('/filterS', 'podujatiaController@filterS')->name('seminar.filter');

Route::get('/details/{id}', 'detailsController@getErasmusId')->name('erasmus.details');
Route::get('/details_blogy/{id}', 'detailsController@getBlogId')->name('blogy.details');
Route::get('/details_seminar/{id}', 'detailsController@getSeminarId')->name('seminar.details');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/edit', 'AdminController@table')
    ->middleware('is_admin')
    ->name('edit');

Route::get('/referent', 'AdminController@referent')
    ->middleware('is_admin')
    ->name('referent');
Route::get('/výzva', 'AdminController@vyzva')
    ->middleware('is_referent')
    ->name('výzva');
Route::get('/správy', 'AdminController@spravy_ucasnikov')
    ->middleware('is_referent')
    ->name('spravy');
Route::get('/nove_univerzity', 'AdminController@prid_unv')
    ->middleware('is_referent')
    ->name('prid_unv');

Route::get('/blogy', 'AdminController@blog')
    ->middleware('is_ucasnik')
    ->name('blogy');

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
Route::post('/pridat_komentar/{id}', 'AdminController@pridat_komentar')->name('komentar.pridat');

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

Route::get('/AllEvents', [
    'as' => 'AllEvents', 'uses' => 'AdminController@EventsTable'
]);

Route::get('/AllUniverzity', [
    'as' => 'AllUniverzity', 'uses' => 'AdminController@UniverzityTable'
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

Route::get('seminare', [
    'as' => 'show', 'uses' =>'podujatiaController@getSeminar',
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