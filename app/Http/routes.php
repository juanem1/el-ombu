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
Route::get('productos-y-precios', ['as' => 'products.show', 'uses' => 'StaticsController@showAllProducts']);

// Contacto
Route::get('contacto', ['as' => 'contact.index', 'uses' => 'ContactController@index']);
Route::post('contacto', ['as' => 'contact.store', 'uses' => 'ContactController@store']);

// Estilos
Route::get('estilo/{slug}', ['as' => 'estilo.show', 'uses' => 'StaticsController@styles']);

// -------------
// STATICS
// -------------

// Ficha tecnica
Route::get('ficha-tecnica', ['as' => 'fichaTecnica', 'uses' => 'StaticsController@ficha']);

// Como se hace su vivienda en 9 pasos
Route::get('vivienda', ['as' => 'vivienda', 'uses' => 'StaticsController@vivienda']);

// La empresa
Route::get('nuestra-empresa', ['as' => 'laEmpresa', 'uses' => 'StaticsController@empresa']);

// Formas de pago
Route::get('formas-de-pago', ['as' => 'formasDePago', 'uses' => 'StaticsController@formasDePago']);


Html::macro('gallery', function($images, $icon) {
    $first = $images->shift();
    $html = '<a href="/img/images/'.$first->name.'" class="'.$icon.'" data-lightbox="gallery-item">';
    $html .= '<i class="icon-line-stack-2"></i>';
    $html .= '</a>';
    foreach ($images as $image) {
        $html .= '<a href="/img/images/'.$image->name.'" class="hide" data-lightbox="gallery-item"></a>';
    }

    return $html;
});