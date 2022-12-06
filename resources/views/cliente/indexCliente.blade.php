@extends('cliente.interfazCliente')
@section('numeroMesa', '12')
<link rel="stylesheet" href="{{ asset('css/interfacesCliente/index.css') }}">
@section('title', 'Inicio')
@section('tituloVista', 'INICIO')

@section('contenCliente')

    <div id="anuncio">
        <img src="{{ asset('img/cliente/imgHamburgesa.png') }}" alt="">
    </div>

    <div class="d-flex justify-content-evenly">
        <a type="button" id="btn" class="btn btn-orange" href="{{ route('descripcionPedidoCliente') }}">PEDIR</a>
        <a type="button" id="btn1" class="btn btn-orange" href="#">CUENTA</a>
    </div>

    <div class="bg-orange rounded" id="Progreso">
        <h2>PROGRESO DEL PEDIDO</h2>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100"></div>
        </div>
        <div class="d-flex justify-content-around">
            <div>Ordenando</div>
            <div>Preparando</div>
            <div>Entregado</div>

        </div>
    </div>
    <div class="d-flex justify-content-evenly">
        <button type="button" class="btn btn-lg btn-block "id="btnSalir">Salir</button>
    </div>
@endsection
