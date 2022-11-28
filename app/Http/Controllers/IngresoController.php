<?php

namespace App\Http\Controllers;
use App\Models\admin;
use App\Models\User;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    public function index ()
    {

        return view('admin.loginGerente');

    }

    public function validacionAdmin()
    {
        if (auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors(['message' => 'El correo o la contraseña es incorrecto']);

        } else {
            return  redirect()->to(route('soporteGerente'));

        }
    }
}
