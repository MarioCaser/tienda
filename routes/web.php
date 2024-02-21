<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\inicioController@index')->name('inicio');

// Route::get('/inspiracion', 'App\Http\Controllers\inicioController@inspiracion')->name('inspiracion');
// Route::post('/inspiracion', 'App\Http\Controllers\inicioController@inspiracionPost')->name('inspiracionPost');

Route::get('/get-images', 'App\Http\Controllers\inicioController@getImages')->name('obtenerImagenes');

Route::get('/contacto', 'App\Http\Controllers\inicioController@inicioContacto')->name('inicioContacto');

Route::get('/productos', 'App\Http\Controllers\InicioController@comprar')->name('productosIndex');

// Route::get('/categorias', 'App\Http\Controllers\InicioController@categorias')->name('categorias');

// Route::get('/categorias/{parametro?}', 'App\Http\Controllers\InicioController@categorias')->name('categorias');

Route::get('/categorias', 'App\Http\Controllers\InicioController@inicioCategorias')->name('inicioCategorias');

Route::get('/categorias/quimicos', 'App\Http\Controllers\InicioController@quimicos')->name('quimicos');

Route::get('/categorias/abrasivos', 'App\Http\Controllers\InicioController@abrasivos')->name('abrasivos');

Route::get('/categorias/diamantados', 'App\Http\Controllers\InicioController@diamantados')->name('diamantados');

Route::get('/categorias/otros', 'App\Http\Controllers\InicioController@otros')->name('otros');


Route::get('/scrap', 'App\Http\Controllers\productosController@actualizaImagen')->name('scrape');

Route::get('/comprar', 'App\Http\Controllers\InicioController@comprar')->name('comprar');

Route::get('/comprar/{categoria}', 'App\Http\Controllers\InicioController@comprar')->name('comprar');

Route::get('/imagenesSrc', 'App\Http\Controllers\productosController@sacarImagenes')->name('imagenesSrc');

Route::get('/descargaPdf', 'App\Http\Controllers\productosController@descargarPDF')->name('descargarPDF');

Route::get('/enlacesPdf', 'App\Http\Controllers\productosController@obtenerEnlaces')->name('enlacesPdf');

Route::get('/obtenernombres', 'App\Http\Controllers\productosController@obtenernombres')->name('obtenernombres');


Route::get('/producto/{parametro?}', 'App\Http\Controllers\InicioController@verProducto')->name('productosIndex');


// Route::get('/productos/adhesivos-y-masillas', 'App\Http\Controllers\InicioController@adhesivos')->name('adhesivos');

Route::get('/nosotros', 'App\Http\Controllers\InicioController@nosotros')->name('nosotros');


Route::get('/nombres', 'App\Http\Controllers\InicioController@mostrarTexto')->name('nombresScrap');
Route::get('/enlaces', 'App\Http\Controllers\InicioController@obtenerSrcDeImagenes')->name('imagenesScrap');
