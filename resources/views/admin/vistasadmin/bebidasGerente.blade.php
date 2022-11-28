@extends('admin.interfazGerente')

@section('title', 'Bebidas Gerente')

@section('conten')

    <link rel="stylesheet" href="{{ asset('css/interfacesGerente/comidas.css') }}">


    <div class="cont-pedidos">

        <div class="pedidos">

            <div class="titleform">
                <br>
                <p class="center text-center">bebidas</p>
            </div>


            <div class="pedido1">
                @foreach ($bebidas as $keycom)
                    <div class="cardeat">
                        <div class="intCard">

                            <div class="contenidoPedido">
                                @php
                                    $dirImg = $keycom['imagenPlatillo'];
                                    $imagen = $dirImg;
                                @endphp
                                <img src="{{ asset($imagen) }}" alt="">
                            </div>


                            <div class="contenidoInterno">
                                <p>@php echo $keycom['nombrePlatillo']@endphp</p>

                                <div class="preEdi">
                                    <div class="precioPlatillo">
                                        <p>Precio: $@php echo $keycom['precioPlatillo']@endphp</p>
                                    </div>
                                    <div class="editarPlatillo">
                                        <button type="submit"> Editar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
