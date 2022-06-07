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

Route::get('/index', 'ContatosController@index')->name('index');
Route::get('/contatos-cadastrar', 'ContatosController@create')->name('cadastrar');
Route::post('/contatos-cadastrar', 'ContatosController@store')->name('validar_contato');
Route::get('/contatos-editar/{id}', 'ContatosController@edit')->name('editar_contato');
Route::post('/contatos-editar/{id}', 'ContatosController@update')->name('valEdit_contato');
Route::get('/contatos-deletar/{id}', 'ContatosController@delete')->name('deletar_contato');
Route::post('/contatos-deletar/{id}', 'ContatosController@destroy')->name('deletar');
