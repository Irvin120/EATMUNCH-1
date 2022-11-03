<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IngresoController;
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

Route::get('/', function () {
    return view('index');
});

Route::get ('/soporte/gerente',[UsersController::class, 'index'])->name('userGerente');

Route::get('/login/gerente',[IngresoController::class, 'index'])->name('loginAdmin');
