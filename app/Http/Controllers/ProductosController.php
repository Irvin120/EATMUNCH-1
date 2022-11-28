<?php

namespace App\Http\Controllers;
use App\Models\menu;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function comidas(){

        $comidas = menu::where('categoriaPlatillo', '=' ,'comidas')->get();
        return view('admin.vistasadmin.comidasGerente',compact('comidas'));

    }

    public function bebidas(){
        $bebidas = menu::where('categoriaPlatillo', '=' ,'bebidas')->get();
        return view('admin.vistasadmin.bebidasGerente', compact('bebidas'));
    }

    public function postres(){
        $postres = menu::where('categoriaPlatillo', '=' , 'postres')->get();
        return view('admin.vistasadmin.postresGerente',compact('postres'));
    }




    public function create(){


    }

    public function store(Request $request)
    {
        $menu = new menu();

        if($request->hasFile('imagenPlatillo')){
            $file = $request->file('imagenPlatillo');
            $destinationPath = 'img/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagenPlatillo')->move($destinationPath, $filename);
            $menu->imagenPlatillo = $destinationPath . $filename;

        }

        $menu->nombrePlatillo = $request->post('nombrePlatillo');
        $menu->descripcionPlatillo = $request->post('descripcionPlatillo');
        $menu->contenidoPlatillo = $request->post('contenidoPlatillo');
        $menu->categoriaPlatillo = $request->post('categoriaPlatillo');

        $menu->precioPlatillo = $request->post('precioPlatillo');
        $menu->save();

        return redirect()->route('comidasGerente');

    }

    public function show(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }






}
