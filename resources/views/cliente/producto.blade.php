@extends('cliente.interfazCliente')
@section('numeroMesa', '12')
<link rel="stylesheet" href="{{ asset('css/interfacesCliente/producto.css') }}">
@section('title', 'Comidas')
@section('tituloVista', 'Descripcion')



@section('contenCliente')

    @foreach ($datos as $keydato)
        {{-- <div class="contenTarget"> --}}
        <div class="conImg">
            @php
                $dirImg = $keydato['imagenPlatillo'];
                $imagen = $dirImg;
            @endphp
            <img class="imgPro" src="{{ asset($imagen) }}" alt="Platillo">
        </div>
        <div class="nomPro">
            <p>@php echo $keydato['nombrePlatillo']; @endphp</p>
        </div>

        <div class="conDC">
            <div class="des">
                <p class="p1">Descripción</p>
                <div class="p11">
                    <p class="p2">@php echo $keydato['descripcionPlatillo']; @endphp</p>
                </div>
            </div>
            <div class="con">
                <p class="p1"> Contenido</p>
                <div class="p11">
                    <p class="p2">@php echo $keydato['contenidoPlatillo']; @endphp</p>
                </div>
            </div>
        </div>

        <div class="total">
            <p class="totalP">Precio: $@php echo$keydato['precioPlatillo']; @endphp</p>
        </div>

        <div class="conBut">

            <a class="btnAgr btn" href="{{route('descripcionPedidoCliente',$keydato->id)}}">Agregar</a>
        </div>
        {{-- </div> --}}
    @endforeach 

@endsection
