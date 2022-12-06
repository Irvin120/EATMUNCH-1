@extends('admin.interfazGerente')

@section('title', 'Mesas Gerente')

<link rel="stylesheet" href="{{asset('css/interfacesGerente/agregarPersonalGerente.css')}}">
<script src="https://kit.fontawesome.com/176f842465.js" crossorigin="anonymous"></script>
@section('conten')
<div class="principal">
    <br>
    <div class="segunda-seccion">
        <br>
        <div class="agregar-mesero">
            <div class="title">
                <p class="center text-center">Agregar Mesero</p>
            </div>
            <br>
            <div class="datos-agrupados">
                <div class="info">
                    <form action="">
                        <label for="Nombre">Nombre </label>
                        <input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre"><br>

                        <label for="ApellidoP">Apellido Paterno</label>
                        <input type="text" name="ApellidoP" value="{{ isset($empleado->ApellidoP)?$empleado->ApellidoP:'' }}" id="ApellidoP"><br>

                        <label for="ApellidoM">Apellido Materno</label>
                        <input type="text" name="ApellidoM" value="{{ isset($empleado->ApellidoM)?$empleado->ApellidoM:'' }}" id="ApellidoM"><br>

                        <label for="FechaN">Fecha de Nacimiento</label>
                        <input type="date" name="FechaN" value="{{ isset($empleado->FechaN)?$empleado->FechaN:'' }}" id="FechaN"><br>

                        <label for="Direccion">Direccion</label>
                        <input type="text" name="Direccion" value="{{ isset($empleado->Direccion)?$empleado->Direccion:'' }}" id="Direccion"><br>

                        <label for="codigoP">Codigo Personal</label>
                        <input type="number" name="codigoP" value="{{ isset($empleado->codigoP)?$empleado->codigoP:'' }}" id="codigoP"><br>
                        
                        <label for="HoraEntrada">Hora de entrada</label>
                        <input type="time" name="HoraEntrada" value="{{ isset($empleado->HoraEntrada)?$empleado->HoraEntrada:'' }}" id="HoraEntrada"><br>
                        
                        <label for="HoraSalida">Hora de salida</label>
                        <input type="time" name="HoraSalida" value="{{ isset($empleado->HoraSalida)?$empleado->HoraSalida:'' }}" id="HoraSalida"><br>


                        <br>
                        <input class="btnGuardar" type="submit" value="Guardar"> <br>
                        <a href="{{ url('empleado/') }}">Regresar</a>
                    </form>
                </div>
                <div class="foto">
                    <label for="Foto">Foto</label><br>
                    @if(isset($empleado->Foto))
                    <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="200" alt="">
                    @endif
                    <input class="input-file" type="file" name="Foto" value="" id="Foto"><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection