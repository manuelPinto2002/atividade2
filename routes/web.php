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
route::get('/livros', 'App\http\Controllers\LivrosController@index')->name('livros.index');

route::get('/autores', 'App\http\Controllers\AutoresController@index')->name('autores.index');

route::get('/editoras', 'App\http\Controllers\EditorasController@index')->name('editoras.index');

route::get('/generos', 'App\http\Controllers\GenerosController@index')->name('generos.index');

route::get('/livros/{id}/show', 'App\http\Controllers\LivrosController@show')->name('livros.show');

route::get('/generos/{id}/show', 'App\http\Controllers\GenerosController@show')->name('generos.show');

route::get('/editoras/{id}/show', 'App\http\Controllers\EditorasController@show')->name('editoras.show');

route::get('/autores/{id}/show', 'App\http\Controllers\AutoresController@show')->name('autores.show');