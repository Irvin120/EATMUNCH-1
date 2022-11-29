@extends('admin.interfazGerente')

@section('title', 'Comida Gerente')

@section('conten')

    <link rel="stylesheet" href="{{ asset('css/interfacesGerente/comidas.css') }}">


    <div class="cont-pedidos">

        <div class="pedidos">

            <div class="titleform">
                <br>
                <p class="center text-center">Comidas</p>
            </div>


            <div class="pedido1">
                @foreach ($comidas as $keycom)
                    <div class="cardeat">
                        <div class="intCard">

                            <div class="contenidoPedido">
                                @php
                                   $dirImg = $keycom['imagenPlatillo'];
                                   $imagen = $dirImg;
                                @endphp
                                <img src="{{asset($imagen)}}" alt="">
                            </div>


                            <div class="contenidoInterno">
                                <p>@php echo $keycom['nombrePlatillo']@endphp</p>

                                <div class="preEdi">
                                    <div class="precioPlatillo">
                                        <p>Precio: $@php echo $keycom['precioPlatillo']@endphp</p>
                                    </div>
                                    <div class="editarPlatillo">

                                        <form action="{{route("editGerente", $keycom->id) }}" method="GET">
                                            <button type="submit">
                                                <span class="fa-regular fa-pen-to-square"></span> ñ</button>
                                        </form>


                                        <button type="submit"> <span class="fa-solid fa-trash-can"></span> </button>

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
