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
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cocina', 'CocinaController@index')->name('cocina.index');

Route::resource('cocina', 'CocinaController');
Route::resource('ordenes', 'OrdenController');
Route::resource('recetas', 'RecetaController');
Route::resource('compras', 'CompraController');
Route::resource('ingredientes', 'IngredienteController');
Route::resource('ingrediente_recetas', 'Ingrediente_RecetaController');

Route::get('crear-ordenes', 'OrdenController@create')->name('ordenes.create');
Route::get('crear-pruebas', 'OrdenController@prueba')->name('ordenes.prueba');
Route::get('bodega', 'BodegaController@index')->name('bodega.index');
Route::get('cambiar-cantidad', 'IngredienteRecetaController@cambiarCantidad')->name('ingredienteReceta.cambiar');
