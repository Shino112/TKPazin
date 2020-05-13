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

/* Novosti rute */
Route::get('/', [
    'uses' => 'Frontend\PostController@index',
    'as' => 'novosti',
]);
Route::get('/novosti/{post}', [
    'uses' => 'Frontend\PostController@show',
    'as' => 'prikaz.novosti',
]);

/* O klubu rute */
Route::get('/o-klubu', function() {
    return view('frontend.o_klubu');
});

/* Kontakt rute */
Route::get('kontakt', 'ContactController@getContact');
Route::post('kontakt', 'ContactController@saveContact');

/* Galerija rute */
Route::get('/galerija', [
    'uses' => 'Frontend\AlbumController@index',
    'as' => 'galerija',
]);
Route::get('/galerija/{album}', [
    'uses' => 'Frontend\AlbumController@show',
    'as' => 'prikaz.albuma',
]);

/* Ranglista piramida rute */
Route::get('/rang-liste/piramida/{godina}', [
    'uses' => 'Frontend\RangListaPiramidaController@show',
    'as' => 'ranglista.piramida.kola',
]);

/* Ranglista turnir rute */
Route::get('/rang-liste/pojedinacni-turnir/{godina}', [
    'uses' => 'Frontend\RangListaTurnirController@show',
    'as' => 'ranglista.turnir.kola',
]);

/* Pojedinacni turnir rute */
Route::get('/pojedinacni-turnir/{id_sezona}', [
    'uses' => 'Frontend\PojedinacniTurnirController@show',
    'as' => 'pojedinacni.turnir',
]);

//autorizacijske rute i register ruta je uklonjena
Auth::routes(['register' => false]);

Route::get('/home', 'Backend\HomeController@index')->name('home');

//rute za novosti u CMS-u
Route::resource('/backend/novosti', 'Backend\NovostiController');

//rute za igrace u CMS-u
Route::resource('/backend/igraci', 'Backend\IgraciController');

//rute za sezonu u CMS-u
Route::resource('/backend/sezone', 'Backend\SezoneController');

//rute za albume u CMS-u
Route::resource('/backend/albumi', 'Backend\AlbumiController');

//rute za slike u CMS-u
Route::resource('/backend/slike', 'Backend\SlikeController')->except(['create', 'store']);
Route::get('/backend/{album}/slike', [
    'uses' => 'Backend\SlikeController@create',
    'as' => 'slike.create',
]);
Route::post('/backend/{album}/slike', [
    'uses' => 'Backend\SlikeController@store',
    'as' => 'slike.store',
]);

//rute za korisnika u CMS-u
Route::resource('/backend/users', 'Backend\UsersController');

//rute za piramidu u CMS-u
Route::resource('/backend/piramida', 'Backend\PiramidaController');