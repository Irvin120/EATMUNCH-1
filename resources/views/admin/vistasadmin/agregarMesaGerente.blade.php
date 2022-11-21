@extends('admin.interfazGerente')

@section('title', 'Mesas Gerente')

<link rel="stylesheet" href="{{asset('css/interfacesGerente/agregarMesaGerente.css')}}">
<script src="https://kit.fontawesome.com/176f842465.js" crossorigin="anonymous"></script>

@section('conten')

<div class="cont-agregarMesa">
    <div class="agregarM">
        <div class="container-1">
            <br>
            <br>
            <h1>Mesa creada</h1>
            <br>
            <br>
            <p>Mesa numero: #</p>
            <br>
            <br>
            <button>Descargar QR</button>
        </div>
        <div class="container-2">
            <img class="img-fluidQR" src="{{ asset('img/admin/mesas/CodigoQRMesaNueva.png') }}"  alt="">
        </div>
    </div>
</div>

@endsection