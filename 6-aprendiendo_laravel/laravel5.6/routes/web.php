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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mostrar_fecha', function() {
    return view('mostrar_fecha');
});

Route::get('/pelicula/{titulo?}/{year?}', function($titulo = 'no hay una pelicula seleccionada',$year=2021)
{
    return view('pelicula' , array(
        'titulo' => $titulo, 
        'year'   => $year
    ));
})->where(array(
    'titulo' => '[a-z]+',
    'year'   => '[0-9]+'
));

Route::get('/listado-peliculas', function()
{
    $titulo  = "listado de peliculas";
    $listado = array("batman","spiderman","capitan philips","scare face");

    return view("peliculas.listado")
            ->with("titulo", $titulo)
            ->with("listado", $listado);
});

Route::get('/genericPage', function()
{
    return view('genericPage');
});