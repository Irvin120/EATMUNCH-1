@extends('admin.interfazGerente')

@section('title', 'Mesas Gerente')

<link rel="stylesheet" href="{{asset('css/interfacesGerente/agregarMesaGerente.css')}}">
<script src="https://kit.fontawesome.com/176f842465.js" crossorigin="anonymous"></script>

@section('conten')

<div class="container">
    <br>
    <br>
    <div class="container-title">
    <h1>Mesa Creada</h1>
    </div>
    <br>
    <div class="container-numero-mesa">
    <p>Mesa numero: # </p>
    <img class="img-fluid" src="{{ asset('img/admin/mesas/CodigoQRMesaNueva.png') }}"  alt="">
    </div>
    <br>
    <br>
    <div class="boton-descargar">
        <i><a href="">Decargar QR</a></i>
    </div>
</div>

@endsection