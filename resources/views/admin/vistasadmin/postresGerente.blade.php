@extends('admin.interfazGerente')

@section('title', 'Postres Gerente')

@section('conten')

    <link rel="stylesheet" href="{{ asset('css/interfacesGerente/comidas.css') }}">


    <div class="cont-pedidos">
        <div class="pedidos">
            <div class="titleform">
                <br>
                <p class="center text-center">Postres</p>
            </div>
            <div class="pedido1">
                @foreach ($postres as $keycom)
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
                                <p class="conTarget">@php echo $keycom['nombrePlatillo']@endphp</p>

                                <div class="preEdi">
                                    <div class="precioPlatillo">
                                        <p class="conTarget">Precio: $@php echo $keycom['precioPlatillo']@endphp</p>
                                    </div>

                                    <div class="editarPlatillo">


                                        <form class="conFor" action="{{ route('editGerente', $keycom->id) }}"
                                            method="GET">
                                            @csrf
                                            <button type="submit">
                                                <span class="fa-regular fa-pen-to-square"></span></button>
                                        </form>

                                        <form class="conFor" action="{{ route('destroyGerente', $keycom->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('¿Estás seguro de ELIMINAR este producto?')"> <span class="fa-solid fa-trash-can"></span> </button>
                                        </form>
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
