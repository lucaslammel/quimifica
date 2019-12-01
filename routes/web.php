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
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function(){

Route::get('/publicacao/create', 'publicacaoController@create');

Route::post('/publicacao', 'publicacaoController@store');

Route::get('/publicacao/{id}/edit', 'publicacaoController@edit');

Route::put('/publicacao/{id}', 'publicacaoController@update');

Route::get('/publicacao/{id}/delete', 'publicacaoController@delete');

Route::delete('/publicacao/{id}/delete', 'publicacaoController@destroy');  

Route::get('/conteudo/create', 'conteudoController@create');

Route::post('/conteudo', 'conteudoController@store');

Route::get('/conteudo/{id}/edit', 'conteudoController@edit');

Route::put('/conteudo/{id}', 'conteudoController@update');

});

Route::get('/publicacao/pdf/{id}', 'relatorioController@publicacaoPDF');

Route::get('/publicacao', 'publicacaoController@index');

Route::get('/publicacao/{id}', 'publicacaoController@show');

Route::get('/conteudo', 'conteudoController@index');

Route::get('/conteudo/{id}', 'conteudoController@show');

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/login', function () {
    return view('login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
