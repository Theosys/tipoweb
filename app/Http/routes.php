<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('inicio', 'WelcomeController@inicio');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('products/destacados', 'ProductController@destacados');

Route::resource('products', 'ProductController');

Route::resource('coleccions', 'ColeccionController');

Route::resource('generos', 'GeneroController');

Route::resource('categorias', 'CategoriaController');

Route::resource('colores', 'ColorController');
