@extends('admin.interfazGerente')

@section('title', 'Mesas Gerente')

<link rel="stylesheet" href="{{asset('css/interfacesGerente/mesasGerente.css')}}">
<script src="https://kit.fontawesome.com/176f842465.js" crossorigin="anonymous"></script>

@section('conten')

<div class="cont-mesas">
        <div class="mesas">
            <div class="title">
                <br>
                <div class="container-agregar-eliminar">
                <p class="center text-center">Mesas activas</p>
                <img class="img-fluid" src="{{ asset('img/admin/mesas/Agregar.png') }}"  alt=""> 
              
                <img class="img-fluid" src="{{ asset('img/admin/mesas/Eliminar.png') }}"  alt="">
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
    <h5 class="card-title">Mesa 1</h5>
    <img class="codigoQR" src="{{ asset('img/admin/mesas/codigoQR.png') }}"  alt="">
      <div class="card-body">
      <img class="img-fluid" src="{{ asset('img/admin/mesas/mesa-09 1.png') }}"  alt="">
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <h5 class="card-title">Mesa 2</h5>
    <img class="codigoQR" src="{{ asset('img/admin/mesas/codigoQR.png') }}"  alt="">
      <div class="card-body">
      <img class="img-fluid" src="{{ asset('img/admin/mesas/mesa-09 1.png') }}"  alt="">
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <h5 class="card-title">Mesa 3</h5>
    <img class="codigoQR" src="{{ asset('img/admin/mesas/codigoQR.png') }}"  alt="">
      <div class="card-body">
      <img class="img-fluid" src="{{ asset('img/admin/mesas/mesa-09 1.png') }}"  alt="">
      </div>
    </div>
  </div>
</div>

@endsection
