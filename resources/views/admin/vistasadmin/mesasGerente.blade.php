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
                <a href="{{route('agregarMesaGerente')}}"><img class="img-fluid-2" src="{{ asset('img/admin/mesas/Agregar.png') }}"  alt=""></a>
              
                <a href=""><img class="img-fluid" src="{{ asset('img/admin/mesas/Eliminar.png') }}"  alt=""></a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
    <h5 class="card-title">Mesa 1<img class="codigoQR" src="{{ asset('img/admin/mesas/codigoQR.png') }}"  alt=""> </h5>
    
      <div class="card-body">
      <img class="img-fluid" src="{{ asset('img/admin/mesas/mesa-09 1.png') }}"  alt="">
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <h5 class="card-title">Mesa 2<img class="codigoQR" src="{{ asset('img/admin/mesas/codigoQR.png') }}"  alt=""></h5>
      <div class="card-body">
      <img class="img-fluid" src="{{ asset('img/admin/mesas/mesa-09 1.png') }}"  alt="">
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <h5 class="card-title">Mesa 3<img class="codigoQR" src="{{ asset('img/admin/mesas/codigoQR.png') }}"  alt=""></h5>
      <div class="card-body">
      <img class="img-fluid" src="{{ asset('img/admin/mesas/mesa-09 1.png') }}"  alt="">
      </div>
    </div>
  </div>
</div>

@endsection
