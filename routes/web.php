<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () { return view('index'); });
Route::get('/login/gerente',[IngresoController::class, 'index'])->name('loginGerente');

Route::get('/soporte/gerente',[UsersController::class, 'indexsoporte'])->name('soporteGerente');
Route::get('/menu/gerente',[UsersController::class, 'indexmenu'])->name('menuGerente');
Route::get('/personal/gerente',[UsersController::class, 'indexpersonal'])->name('personalGerente');
Route::get('/pedidos/gerente',[UsersController::class, 'indexpedidos'])->name('pedidosGerente');
Route::get('/mesas/gerente',[UsersController::class, 'indexmesas'])->name('mesasGerente');
Route::get('agregar/mesa/gerente',[UsersController::class, 'indexagregarmesa'])->name('agregarMesaGerente');

//Vistas de Menu Gerente

Route::get('comidas/gerente',[ProductosController::class, 'comidas'])->name('comidasGerente');
Route::get('bebidas/gerente',[ProductosController::class, 'bebidas'])->name('bebidasGerente');
Route::get('postres/gerente',[ProductosController::class, 'postres'])->name('postresGerente');

