<?php

// Home
Route::get('/', 'WelcomeController@index');
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
Route::get('contacto', 'ContactController@index');
Route::post('contacto', 'ContactController@store');

// Ficha tecnica
Route::get('ficha-tecnica', function() {
    return view('statics/ficha-tecnica.blade.php');
});

// Como se hace su vivienda en 9 pasos
Route::get('vivienda', function() {
    return view('statics/vivienda.blade.php');
});

// La empresa
Route::get('la-empresa', function() {
    return view('statics/la-empresa.blade.php');
});