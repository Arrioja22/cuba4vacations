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
});



Route::get('/Dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/Inicio', function () {
    return view('socio_home.home');
})->middleware('auth:socios');

//-------- Destino --------//
Route::resource('Destino', 'DestinosController');
Route::get('/Crear_Destino', 'DestinosController@create');
Route::post('/Crear_Destino', 'DestinosController@store');

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
Route::get('/Registro_Cliente', 'RegistroClientesController@create');
Route::post('/Registro_Cliente', 'RegistroClientesController@store');

//-------- Contactanos --------//
Route::resource('Contacto', 'ContactosController');
Route::get('/Contactanos', 'ContactosController@create');
Route::post('/Contactanos', 'ContactosController@store'); 

//-------- Comentarios Clientes --------//
Route::resource('Comentarios', 'ComentariosController');
Route::get('/Crear_Comentario', 'ComentariosController@create');
Route::post('/Crear_Comentario', 'ComentariosController@store');




Route::get('/home', 'HomeController@index')->name('home');

