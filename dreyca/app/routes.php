<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::controller('/login','LoginController');

Route::get('/Salir', function()
{
    Auth::logout();
    return Redirect::to('/login');
});
Route::get('/','PrincipalController@Index');

Route::controller('/tablero','TableroController');

Route::get('/contacto','ContactosController@Index');

Route::controller('/insert','InsertController');

Route::get('/{servicio}','ServicioController@Index');