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
                        <p>Nombre del mesero:</p>
                        <input type="text" name="" id="">
                        <p>Fecha de nacimiento</p>
                        <input type="date" name="" id="">
                        <p>Direccion</p>
                        <input type="text" name="" id="">
                        <p>Hora de entrada y salida</p>
                        <input type="time" name="" id=""> <input type="time" name="" id="">
                        <br>
                        <br>
                        <input class="btnGuardar" type="submit" value="Guardar">
                    </form>
                </div>
                <div class="foto">
                    <input class="input-file" type="file" name="" id="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection