@extends('cliente.interfazCliente')
@section('numeroMesa', '12')
<link rel="stylesheet" href="{{ asset('css/interfacesCliente/pedidos.css') }}">
@section('title', 'Pedidos')
@section('tituloVista', 'PEDIDOS')


@section('contenCliente')


<div class="d-flex justify-content-evenly">
    <a type="button" class="btn btn-warning btn-lg btn-block "id="btnMenu" href="{{ route('menu1Cliente') }}">MENU</a>
</div>

<table class="table table-bordered " id="tabla">

    <thead class="" id="ObjetosDeLaTabla">
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
    </thead>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>


<div class="d-flex justify-content-evenly">
    <a type="button" class="btn btn-lg btn-block "id="btnRealizarPedido"
        href="{{ route('descripcionPedidoCliente') }}">Realizar Pedido</a>
</div>
@endsection
