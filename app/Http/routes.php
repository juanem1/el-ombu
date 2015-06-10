<?php

// Home
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

// Auth
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Complejos
Route::resource('complex', 'ComplexController');

// Galerias
Route::resource('gallery', 'GalleryController');

// Ofertas
Route::resource('offers', 'OffersController');

// Productos
Route::resource('products', 'ProductsController');

// Contacto
Route::get('contacto', ['as' => 'contact.index', 'uses' => 'ContactController@index']);
Route::post('contacto', ['as' => 'contact.store', 'uses' => 'ContactController@store']);

// Ficha tecnica
Route::get('ficha-tecnica', ['as' => 'fichaTecnica', 'uses' => 'StaticsController@ficha']);

// Como se hace su vivienda en 9 pasos
Route::get('vivienda', ['as' => 'vivienda', 'uses' => 'StaticsController@vivienda']);

// La empresa
Route::get('la-empresa', ['as' => 'laEmpresa', 'uses' => 'StaticsController@empresa']);