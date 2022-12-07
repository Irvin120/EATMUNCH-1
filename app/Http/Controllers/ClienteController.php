<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\menu;

class ClienteController extends Controller
{
    public function PP()
    {
        return view('cliente.interfazcliente');
    }

    public function indexCliente()
    {
        return view('cliente.indexCliente');
    }

    public function cuenta()
    {
        return view('cliente.Cuenta');
    }

    public function descripcionPedido()
    {
        
        return view('cliente.descripcionPedido');
    }

    public function menu1()
    {
        $comida = menu::where('categoriaPlatillo', '=', 'comidas')->get();
        return view('cliente.menu1', compact('comida'));
    }

    public function menu2()
    {
        $bebida = menu::where('categoriaPlatillo', '=', 'bebidas')->get();
        return view('cliente.menu2', compact('bebida'));
    }

    public function menu3()
    {
        $postre = menu::where('categoriaPlatillo', '=', 'postres')->get();
        return view('cliente.menu3', compact('postre'));
    }

    public function notificacionCuenta()
    {
        return view('cliente.notificacionCuenta');
    }

    public function notificacionEnvio()
    {
        return view('cliente.notificacionEnvio');
    }

    public function pedidos()
    {
        return view('cliente.pedidos');
    }

    public function descripcionProducto()
    {
        $idDato = isset($_GET['id']) ? $_GET['id'] : '';

        if ($idDato == '') {
            echo 'Error al procesar la petición';
            exit;
        } else {
            // $datos= menu::all();
            $datos = menu::where('id', "$idDato")->get();
            return view('cliente.producto', compact('datos'));
        }
    }
}
