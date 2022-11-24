<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function indexCliente(){
        return view('cliente.indexCliente');
    }

    public function cuenta(){
        return view('cliente.Cuenta');
    }

    public function descripcionPedido(){
        return view('cliente.descripcionPedido');
    }

    public function menu1(){
        return view('cliente.menu1');
    }

    public function menu2(){
        return view('cliente.menu2');
    }

    public function menu3(){
        return view('cliente.menu3');
    }

    public function notificacionCuenta(){
        return view('cliente.notificacionCuenta');
    }

    public function notificacionEnvio(){
        return view('cliente.notificacionEnvio');
    }

    public function pedidos(){
        return view('cliente.pedidos');
    }

    public function productos(){
        return view('cliente.producto');
    }


}
