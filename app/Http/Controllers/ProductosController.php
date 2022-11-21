<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function comidas(){
        return view('admin.vistasadmin.comidasGerente');
    }

    public function bebidas(){
        return view('admin.vistasadmin.bebidasGerente');
    }

    public function postres(){
        return view('admin.vistasadmin.postresGerente');
    }
}
