<?php
Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show'); //
Route::get('/reservas/{id}', 'ReservaController@show');
Route::get('/search', 'searchController@show'); //
//Route::get('/products/{id}/rooms', 'RoomsController@show');
Route::get('/rooms/{id}', 'RoomsController@show');


Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/products', 'ProductController@index'); //Listado
    Route::get('/products/create', 'ProductController@create'); //ver formulario
    Route::post('/products', 'ProductController@store'); //registra
    Route::get('/products/{id}/edit', 'ProductController@edit'); //edicion
    Route::post('/products/{id}/edit', 'ProductController@update'); //actualizar
    Route::delete('/products/{id}', 'ProductController@destroy'); //eliminar

    Route::get('/products/{id}/images', 'ImageController@index'); //listado
    Route::post('/products/{id}/images', 'ImageController@store'); //registrar
    Route::delete('/products/{id}/images', 'ImageController@destroy'); //eliminar

    Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); //destacar

    

});

