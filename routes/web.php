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

Route::get('/', function () {
    return view('login');
});

Route::view('/register', 'register');
Route::view('/login', 'login');
Route::view('/home', 'home');
Route::view('/lotes', 'lotes');
Route::view('/mostrarLote', 'mostrarLote');
Route::view('/descripcionLote', 'descripcionLote');
Route::view('/cotizaciones', 'cotizaciones');
Route::view('/registroCotizacion', 'registroCotizacion');
Route::view('/registroCliente', 'registroCliente');
Route::view('/usuarios', 'usuarios');
Route::view('/registrarUsuario', 'registrarUsuario');
Route::view('/administradores', 'administradores');
Route::view('/clientes', 'clientes');
Route::view('/ventas', 'ventas');
Route::view('/registrarVenta', 'registrarVenta');



