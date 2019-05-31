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
    return view('index');
})->name('index');



Route::get('/Dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('paquetes-cuba', function () {
return view('paquetes.index-2');
});

Route::get('destinos-cuba', function () {
return view('paquetes.index-4');
});

//-------- Destino --------//
Route::get('paquete-habana','PaqueteVentasController@create');
Route::get('paquete-trinidad','PaqueteVentasController@create2');
Route::get('paquete-viñales','PaqueteVentasController@create3');
Route::get('paquete-promocion','PaqueteVentasController@create4');
Route::post('paquetes','PaqueteVentasController@store');

Route::get('Inicio', function () {
    return view('socio_home.home');
})->middleware('auth:socios');

//-------- Destino --------//
Route::resource('destino', 'DestinosController');
Route::get('crear-destino', 'DestinosController@create');
Route::post('crear-destino', 'DestinosController@store');

//-------- Registro Socio --------//
Route::resource('socios', 'RegistrosSociosController');
Route::get('registrate', 'RegistrosSociosController@create');
Route::post('registro-socio', 'RegistrosSociosController@store');

//-------- Iniciar sesion Socio --------//
Route::get ('inicia-sesion', 'SociosLoginController@showLoginForm')->name('inicia_sesion');
Route::post ('inicia-sesion', 'SociosLoginController@login');
Route::post('salir','SociosLoginController@logout');

//-------- Registro Clientes --------//
Route::resource('Clientes', 'RegistroClientesController');
Route::get('registro', 'RegistroClientesController@create');
Route::post('/Registro_Cliente', 'RegistroClientesController@store');

//-------- Contactanos --------//
Route::resource('contacto', 'ContactosController');
Route::get('contactanos', 'ContactosController@create');
Route::post('contactanos', 'ContactosController@store'); 

//-------- Comentarios Clientes --------//
Route::resource('comentarios', 'ComentariosController');
Route::get('crear-comentario', 'ComentariosController@create');
Route::post('crear-comentario', 'ComentariosController@store');




Route::get('/home', 'HomeController@index')->name('home');

