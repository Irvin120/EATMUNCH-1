@extends('admin.interfazGerente')

@section('title', 'Personal Gerente')

<link rel="stylesheet" href="{{ asset('css/interfacesGerente/personalGerente.css') }}">
<script src="https://kit.fontawesome.com/176f842465.js" crossorigin="anonymous"></script>

@section('conten')

    <div class="general">
        <div class="div-personal">
            <div class="title">
                <p class="center text-center titVis">Personal</p>
                <a href="{{ url('empleado/create') }}"><img class="img-fluid-3"
                        src="{{ asset('img/admin/mesas/Agregar.png') }}" alt=""></a>
            </div>
            <div class="fondo">
                <p class="ticAct">Activos</p>

                <div class="activos">

                    @foreach ($empleados as $empleado)
                        <div class="card-personal card1">
                            <div class="foto">
                                <img src="{{ asset('storage') . '/' . $empleado->imagenEmpleado }}" width="200"
                                    alt="">
                            </div>
                            <div class="info">
                                <h4 class="center text-center">Numero de mesero: {{ $empleado->id }}</h4>
                                <p class="p-info">Nombre: {{ $empleado->Nombre }} </p>
                                <p class="p-info">Edad: {{ $empleado->FechaN }}</p>
                                <p class="p-info">Hora de entrada: {{ $empleado->HoraEntrada }}</p>
                                <P class="p-info">Hora de salida: {{ $empleado->HoraSalida }}</P>
                                <P class="p-info">Codigo de personal: {{ $empleado->codigoP }}</P>
                                <p class="p-info">Direccion: {{ $empleado->Direccion }} </p>

                                <form action="{{ url('/empleado/' . $empleado->id) }}" method="post" class="forDel">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input type="submit" onclick="return confirm('¿Quieres Borrar ?')" value="Borrar">
                                </form> 
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


            <br>
            {{-- <h2 class="center text-center">Inactivos</h2>
            <div class="ausentes">
                <div class="card-personal2 card1">
                    <div class="foto">
                        <img class="img-fluid2" src="{{ asset('img/admin/personal/foto.png') }}" alt="">
                    </div>
                    <div class="info">
                        <h4 class="center text-center">Numero de mesero: 25</h4>
                        <p class="p-info">Nombre: Jose Perez</p>
                        <p class="p-info">Edad: 25</p>
                        <p class="p-info">Hora de entrada: 7:00 AM</p>
                        <P class="p-info">Hora de salida: 8:00 PM</P>
                        <P class="p-info">Codigo de personal: 2510</P>
                        <p class="p-info">Numero de pedidos realizados: 20</p>
                    </div>
                </div>
                <div class="card-personal2 card1">
                    <div class="foto">
                        <img class="img-fluid2" src="{{ asset('img/admin/personal/foto.png') }}" alt="">
                    </div>
                    <div class="info">
                        <h4 class="center text-center">Numero de mesero: 25</h4>
                        <p class="p-info">Nombre: Jose Perez</p>
                        <p class="p-info">Edad: 25</p>
                        <p class="p-info">Hora de entrada: 7:00 AM</p>
                        <P class="p-info">Hora de salida: 8:00 PM</P>
                        <P class="p-info">Codigo de personal: 2510</P>
                        <p class="p-info">Numero de pedidos realizados: 20</p>
                    </div>
                </div>
                <div class="card-personal2 card1">
                    <div class="foto">
                        <img class="img-fluid2" src="{{ asset('img/admin/personal/foto.png') }}" alt="">
                    </div>
                    <div class="info">
                        <h4 class="center text-center">Numero de mesero: 25</h4>
                        <p class="p-info">Nombre: Jose Perez</p>
                        <p class="p-info">Edad: 25</p>
                        <p class="p-info">Hora de entrada: 7:00 AM</p>
                        <P class="p-info">Hora de salida: 8:00 PM</P>
                        <P class="p-info">Codigo de personal: 2510</P>
                        <p class="p-info">Numero de pedidos realizados: 20</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

@endsection
