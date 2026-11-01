<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/', '/login');
Route::view('/index', '/bienvenida');
Route::view('/contactanos', '/contactanos');
Route::view('/galeria', '/galeria');
Route::view('/nosotros', '/quienes_somos');

Route::view('/pag', '/nivel2/pagina1');

Route::view('/tailwind', '/flowbite');

Route::view('/detalle_producto', '/detalle_producto');
Route::view('/politicas', '/politicas');
Route::view('/faq', '/faq');
Route::view('/carrito', '/carrito');
Route::view('/ofertas', '/ofertas');
Route::view('/registro', '/registro');
Route::view('/pagar', 'pagar');
Route::view('/cuenta', '/cuenta');
Route::view('/confirmacion', '/confirmacion');