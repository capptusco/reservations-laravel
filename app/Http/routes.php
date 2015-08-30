<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

//Pasar parametro por get
Route::get('nombre/{nombre}',function($nombre){
	return 'Mi nombre es '.$nombre;
});

//Pone opcional el parametro y define un valor por defecto
Route::get('edad/{edad?}',function($edad = 20){
	return 'Mi edad es '.$edad;
});

Route::get('prueba', function () {
    return 'Golaaa';
});
