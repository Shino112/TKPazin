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

/* Rezervacija terena rute */
Route::get('/rezervacija-terena', function() {
    return view('frontend.rezervacije');
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
Route::get('/pojedinacni-turnir/{id_sezona}/{id_kola}', [
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
Route::get('/search-igrac', 'Backend\IgraciController@search');

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
Route::get('/backend/piramida/{piramida}/bodovi', [
    'uses' => 'Backend\PiramidaController@bodovi',
    'as' => 'bodovi.piramida',
]);
Route::post('/backend/piramida/{piramida}/bodovi', [
    'uses' => 'Backend\PiramidaController@bodovi_store',
    'as' => 'bodovi.piramida.store',
]);
Route::get('/backend/piramida/{piramida}/bodovi/{igrac}/edit', [
    'uses' => 'Backend\PiramidaController@bodovi_edit',
    'as' => 'bodovi_edit.piramida',
]);
Route::delete('/backend/piramida/{piramida}/bodovi/{igrac}', [
    'uses' => 'Backend\PiramidaController@bodovi_delete',
    'as' => 'bodovi_delete.piramida',
]);
Route::put('/backend/piramida/{piramida}/bodovi/{igrac}', [
    'uses' => 'Backend\PiramidaController@bodovi_update',
    'as' => 'bodovi_update.piramida',
]);
Route::get('/search-piramida', 'Backend\PiramidaController@search');

//rute za turnire u CMS-u
Route::resource('/backend/turniri', 'Backend\TurniriController');
Route::get('/backend/turniri/{turniri}/bodovi', [
    'uses' => 'Backend\TurniriController@bodovi',
    'as' => 'bodovi.turnir',
]);
Route::post('/backend/turniri/{turniri}/bodovi', [
    'uses' => 'Backend\TurniriController@bodovi_store',
    'as' => 'bodovi.turnir.store',
]);
Route::get('/backend/turniri/{turniri}/bodovi/{igrac}/edit', [
    'uses' => 'Backend\TurniriController@bodovi_edit',
    'as' => 'bodovi_edit.turnir',
]);
Route::delete('/backend/turniri/{turniri}/bodovi/{igrac}', [
    'uses' => 'Backend\TurniriController@bodovi_delete',
    'as' => 'bodovi_delete.turnir',
]);
Route::put('/backend/turniri/{turniri}/bodovi/{igrac}', [
    'uses' => 'Backend\TurniriController@bodovi_update',
    'as' => 'bodovi_update.turnir',
]);
Route::get('/search-turnir', 'Backend\TurniriController@search');