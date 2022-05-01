<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get($uri, $callback); Mostrar por pantalla
Route::post($uri, $callback); Enviar un insert
Route::put($uri, $callback); Enviar para update
Route::patch($uri, $callback);
Route::delete($uri, $callback); Enviar para borrar
Route::options($uri, $callback);
*/

/* Route::get('/', function () {
    return view('index');
}); */

//Llamar a un metodo de un controlador
Route::get('/', [App\Http\Controllers\SaludoController::class, 'inicio']);
Route::post('/saludos/{comentario}', [App\Http\Controllers\SaludoController::class, 'saludo']);

//Rutas simples
// ? para opcional y null para si no hay nada quede en blanco
Route::get('/saludo/{nombre?}', function ($nombre = null)
{
    return 'Hola ' . $nombre;
    //Nombramos una ruta con ->
})->name('saludo');

//Pasar array asociativo con PHP
Route::get('/hola', function ()
{
    /* $data['nombre'] = 'Ivan';
    $data['apellido'] = 'Cabañas';

    return view('carpeta.hola', $data); */

    $nombre = 'Ivan';
    $apellido = 'Cabañas';

    //si esta en carpeta va con .
    return view('carpeta.hola', compact('nombre', 'apellido'));
    //Nombramos una ruta con ->
})->name('hola');
