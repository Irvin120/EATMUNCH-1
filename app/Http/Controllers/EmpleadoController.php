<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// uso de Storage
use Illuminate\Support\Facades\Storage;
// para crear Modelo_Controlador_Migracion php artisan make:model Empleado -mcr
class EmpleadoController extends Controller
{

    public function index()
    {
        //
        $datos['empleados'] = Empleado::paginate(5);
        return view('admin.vistasadmin.empleado.personalGerente', $datos);
    }


    public function create()
    {
        //
        return view('admin.vistasadmin.empleado.create');
    }


    public function store(Request $request)
    {
        //$datosEmpleado = request()->all();

        $datosEmpleado = request()->except('_token');
        if ($request->hasFile('imagenEmpleado')){
            $datosEmpleado['imagenEmpleado']= $request->file('imagenEmpleado')->store('uploads', 'public');
        }
        Empleado::insert($datosEmpleado);
        return back();
    }


    public function show(Empleado $empleado)
    {
        //
    }



    public function edit($id)
    {
        //
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }



    public function update(Request $request, $id)
    {
        // para resover error de Storage : php artisan storage:link
        $datosEmpleado = request()->except(['_token', '_method']);

        if ($request->hasFile('Foto')) {
            $empleado = Empleado::findOrFail($id);
            Storage::delete('public/' . $empleado->Foto);
            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        Empleado::where('id', '=', $id)->update($datosEmpleado);
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }



    public function destroy($id)
    {
        //
        $empleado = Empleado::findOrFail($id);
        if (Storage::delete('public/'.$empleado->imagenEmpleado)) {
            Empleado::destroy($id);
        }

        return redirect('empleado')->with('mensaje', 'Empleado Borrado');
    }
}
