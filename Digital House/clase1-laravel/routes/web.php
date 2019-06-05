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

Route::get('/ruta1', function () {
    return "hola mundo";
});

Route::get('/resultado/{numero}', function ($numero) {
    if ($numero%2==0){
        $resultado= 'el numero'. '' . $numero . '' . 'es par';
    }
    else{
       $resultado= 'el numero'. $numero . 'es impar';
    }
    return $resultado;
 });
 

 Route::get('/peliculas/{id}','PeliculasController@buscarPeliculaId');

 Route::get('/peliculas/buscar/{nombre}','PeliculasController@buscarPeliculaNombre');
 
 