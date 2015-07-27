<?php

// Home
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

// Auth
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Dashboard
Route::get('dashboard', ['as' => 'dashboard.index', 'uses' => 'DashboardController@index']);

// Complejos
Route::resource('complex', 'ComplexController');
Route::get('complejos/{name}', ['as' => 'complejos.show', 'uses' => 'StaticsController@viewComplex']);

// Galerias
Route::resource('gallery', 'GalleryController');
Route::get('galeria/{name}', ['as' => 'galeria.view', 'uses' => 'StaticsController@viewGallery']);

// Images
Route::resource('images', 'ImagesController');

// Ofertas
Route::resource('offers', 'OffersController');
Route::get('ofertas', ['as' => 'ofertas', 'uses' => 'StaticsController@showAllOffers']);
Route::get('oferta/{slug}', ['as' => 'oferta.show', 'uses' => 'StaticsController@viewOffer']);

// Productos
Route::resource('products', 'ProductsController');

// Contacto
Route::get('contacto', ['as' => 'contact.index', 'uses' => 'ContactController@index']);
Route::post('contacto', ['as' => 'contact.store', 'uses' => 'ContactController@store']);

// -------------
// STATICS
// -------------

// Ficha tecnica
Route::get('ficha-tecnica', ['as' => 'fichaTecnica', 'uses' => 'StaticsController@ficha']);

// Como se hace su vivienda en 9 pasos
Route::get('vivienda', ['as' => 'vivienda', 'uses' => 'StaticsController@vivienda']);

// La empresa
Route::get('la-empresa', ['as' => 'laEmpresa', 'uses' => 'StaticsController@empresa']);

// Formas de pago
Route::get('formas-de-pago', ['as' => 'formasDePago', 'uses' => 'StaticsController@formasDePago']);