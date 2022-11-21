<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function indexsoporte()
    {
        return view('admin.vistasadmin.soporteGerente');
    }

    public function indexmenu()
    {
        return view('admin.vistasadmin.menuGerente');
    }

    public function indexpersonal()
    {
        return view('admin.vistasadmin.personalGerente');
    }

    public function indexpedidos()
    {
        return view('admin.vistasadmin.pedidosGerente');
    }

    public function indexmesas()
    {
        return view('admin.vistasadmin.mesasGerente');
    }
    public function indexagregarmesa()
    {
        return view('admin.vistasadmin.agregarMesaGerente');
    }
    public function indexeliminarmesa()
    {
        return view('admin.vistasadmin.eliminarMesaGerente');
    }
}
