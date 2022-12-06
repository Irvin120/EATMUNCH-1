@extends('cliente.interfazCliente')
@section('numeroMesa', '12')
<link rel="stylesheet" href="{{ asset('css/interfacesCliente/menu1.css') }}">
@section('title', 'Bebidas')
@section('tituloVista', 'Bebidas')



@section('contenCliente')

    <div class="contenTarget">
        @foreach ($bebida as $keycomida)
            <div class="target-Producto">
                <a href="{{ route('descripcionProductoCliente') }}?id=@php echo $keycomida['id']; @endphp">
                    <div class="conimage">
                        @php
                            $dirImg = $keycomida['imagenPlatillo'];
                            $imagen = $dirImg;
                        @endphp
                        <img class="imgPlatillom" src="{{ asset($imagen) }}" alt="Platillo">
                    </div>
                </a>
                <div class="contpn">
                    <div class="nP">
                        <p class="pnp">@php echo $keycomida['nombrePlatillo'] @endphp</p>
                    </div>
                    <div class="pP">
                        <p class="ppp">$@php echo $keycomida['precioPlatillo'] @endphp</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <footer>
        <div class="d-flex justify-content-around" id="botonesDeMenu">
            <a type="button" class="btn" id="btnComidas" href="{{ route('menu1Cliente') }}">
                <img src="{{ asset('img/cliente/logoBisctec.png') }}" alt="">
            </a>
            <a type="button" class="btn" id="btnBebidas" href="{{ route('menu2Cliente') }}">
                <img src="{{ asset('img/cliente/logoCafe.png') }}" alt="">
            </a>
            <a type="button" class="btn" id="btnPostres" href="{{ route('menu3Cliente') }}">
                <img src="{{ asset('img/cliente/logoNachos.png') }}" alt="">
            </a>
        </div>

        <div id="nombreDePieDeMenu">
            <p>Bebida</p>
        </div>
    </footer>



@endsection
