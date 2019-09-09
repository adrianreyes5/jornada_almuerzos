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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'CocinaController@index');

Route::resource('cocina', 'CocinaController');
// Route::resource('ordenes', 'OrdenController');
// Route::resource('recetas', 'RecetaController');
Route::resource('compras', 'CompraController');
// Route::resource('estado', 'EstadoController');
// Route::resource('ingredientes', 'IngredienteController');
// Route::resource('ingrediente_recetas', 'Ingrediente_RecetaController');

Route::get('bodega', 'BodegaController@index')->name('bodega.index');



