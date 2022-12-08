<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Models\User;

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
Route::get('/login/gerente',[IngresoController::class, 'index'])->name('login');
Route::post('/login/gerente',[IngresoController::class,'validacionAdmin'])->name('login.store');


Route::get('/soporte/gerente',[UsersController::class, 'indexsoporte'])->name('soporteGerente')->middleware('auth');
Route::get('/menu/gerente',[UsersController::class, 'indexmenu'])->name('menuGerente')->middleware('auth');
Route::get('/personal/gerente',[UsersController::class, 'indexpersonal'])->name('personalGerente')->middleware('auth');
Route::get('/pedidos/gerente',[UsersController::class, 'indexpedidos'])->name('pedidosGerente')->middleware('auth');
Route::get('/mesas/gerente',[UsersController::class, 'indexmesas'])->name('mesasGerente')->middleware('auth');

Route::get('agregar/personal/gerente',[UsersController::class, 'indexagregarpersonal'])->name('agregarPersonalGerente')->middleware('auth');

Route::get('/agregar/mesa/gerente',[UsersController::class, 'indexagregarmesa'])->name('agregarMesaGerente')->middleware('auth');
Route::get('agregar/mesa/gerente',[UsersController::class, 'indexagregarmesa'])->name('agregarMesaGerente');

//Vistas de Menu Gerente
Route::get('comidas/gerente',[ProductosController::class,'comidas'])->name('comidasGerente')->middleware('auth');
Route::post('comidas/store', [ProductosController::class,'store'])->name('storeGerente')->middleware('auth');
Route::get('comida/edit/{id}', [ProductosController::class,'edit'])->name('editGerente')->middleware('auth');
Route::put('comidas/update/{id}',[ProductosController::class, 'update'])->name('updateGerente')->middleware('auth');
Route::delete('comida/delete{id}',[ProductosController::class, 'destroy'])->name('destroyGerente')->middleware('auth');



Route::get('bebidas/gerente',[ProductosController::class, 'bebidas'])->name('bebidasGerente')->middleware('auth');
Route::get('postres/gerente',[ProductosController::class, 'postres'])->name('postresGerente')->middleware('auth');

Route::get('/destroy',[UsersController::class,'destroy'])->name('destroy')->middleware('auth');


//CRUD MENU GERENTE



//Vistas del cliente
Route::get('inicio/cliente',[ClienteController::class, 'indexCliente'])->name('indexCliente');
Route::get('cuenta/cliente',[ClienteController::class, 'cuenta'])->name('cuentaCliente');
Route::get('descripcionPedido/cliente',[ClienteController::class, 'descripcionPedido'])->name('descripcionPedidoCliente');
Route::get('menu1/cliente',[ClienteController::class, 'menu1'])->name('menu1Cliente');
Route::get('menu2/cliente',[ClienteController::class, 'menu2'])->name('menu2Cliente');
Route::get('menu3/cliente',[ClienteController::class, 'menu3'])->name('menu3Cliente');
Route::get('notificacionCuenta/cliente',[ClienteController::class, 'notificacionCuenta'])->name('notificacionCuentaCliente');
Route::get('notificacionEnvio/cliente',[ClienteController::class, 'notificacionEnvio'])->name('notificacionEnvioCliente');
// Route::get('pedidos/cliente',[ClienteController::class, 'pedidos'])->name('pedidosCliente');
Route::get('descripcionProducto/cliente',[ClienteController::class, 'descripcionProducto'])->name('descripcionProductoCliente');

//Ruta para los meseros(empledos)
Route::resource('empleado',EmpleadoController::class);
Route::resource('mesa',MesasController::class);


//Prubas de interfaz
Route::get('pp',[ClienteController::class, 'pp'])->name('pp');

