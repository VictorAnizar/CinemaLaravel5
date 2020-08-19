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
	//prueba
	Route::get('prueba', function(){
		return 'Hola desde web.php';
	});
	//con parametros
	Route::get('QuieroPan/{con}',function($con){
		return 'Quiero pan con '.$con;
	});
	Route::get('Nombre/{nom?}',function($nom='Default'){
		return 'Hola, mi nombre es '.$nom;
	});
	//accediendo a un controlador desde una ruta
	Route::get('controlador','PruebaController@index');
	Route::get('nombreControlador/{nom}','PruebaController@nombre');

	//es más eficiente restFul porque puedo acceder a todos los metodos del controlador sin la necesidad de crear varias rutas a ese controlador con sus diversos metodos
	Route::resource('pruebaRestFul','PruebaRestFulController');

	//ruta a la pantalla principal de laravel
	Route::get('/', function () {
	    return view('welcome');
	});
*/
Route::get('/','ControladorVista@index');
Route::get('contacto','ControladorVista@contacto');
Route::get('reviews','ControladorVista@reviews');
