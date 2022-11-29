@extends('admin.interfazGerente')

@section('title', 'Mesas Gerente')

<link rel="stylesheet" href="{{asset('css/interfacesGerente/mesasGerente.css')}}">
<script src="https://kit.fontawesome.com/176f842465.js" crossorigin="anonymous"></script>

@section('conten')

<div class="cont-mesas">
  <div class="mesas">
    <div class="title">
      <br>
      <p class="center text-center">Mesas Activas 
        <a href="{{route('agregarMesaGerente')}}"><img class="img-fluid-3" src="{{ asset('img/admin/mesas/Agregar.png') }}"  alt=""></a>
      </p>
      

    </div>
    <div class="container-mesas">
      <div class="cards-mesas card1">
        <p class="nombre-mesa">Mesa: 1 <img class="codigoQR" src="{{ asset('img/admin/mesas/codigoQR.png') }}"  alt=""></p>
        <img class="img-fluid2" src="{{ asset('img/admin/mesas/mesa-09 1.png') }}"  alt="">
        <button type="button" class="btn btn-danger">Eliminar Mesa</button>
      </div>
      <div class="cards-mesas card2">
        <p class="nombre-mesa">Mesa: 2 <img class="codigoQR" src="{{ asset('img/admin/mesas/codigoQR.png') }}"  alt=""></p>
        <img class="img-fluid2" src="{{ asset('img/admin/mesas/mesa-09 1.png') }}"  alt="">
        <button type="button" class="btn btn-danger">Eliminar Mesa</button>
      </div>
      <div class="cards-mesas card3">
        <p class="nombre-mesa">Mesa: 3 <img class="codigoQR" src="{{ asset('img/admin/mesas/codigoQR.png') }}"  alt=""></p>
        <img class="img-fluid2" src="{{ asset('img/admin/mesas/mesa-09 1.png') }}"  alt="">
        <button type="button" class="btn btn-danger">Eliminar Mesa</button>
      </div>
      <div class="cards-mesas card3">
        <p class="nombre-mesa">Mesa: 3 <img class="codigoQR" src="{{ asset('img/admin/mesas/codigoQR.png') }}"  alt=""></p>
        <img class="img-fluid2" src="{{ asset('img/admin/mesas/mesa-09 1.png') }}"  alt="">
        <button type="button" class="btn btn-danger">Eliminar Mesa</button>
      </div>
      <div class="cards-mesas card3">
        <p class="nombre-mesa">Mesa: 3 <img class="codigoQR" src="{{ asset('img/admin/mesas/codigoQR.png') }}"  alt=""></p>
        <img class="img-fluid2" src="{{ asset('img/admin/mesas/mesa-09 1.png') }}"  alt="">
        <button type="button" class="btn btn-danger">Eliminar Mesa</button>
      </div>
      <div class="cards-mesas card3">
        <p class="nombre-mesa">Mesa: 3 <img class="codigoQR" src="{{ asset('img/admin/mesas/codigoQR.png') }}"  alt=""></p>
        <img class="img-fluid2" src="{{ asset('img/admin/mesas/mesa-09 1.png') }}"  alt="">
        <button type="button" class="btn btn-danger">Eliminar Mesa</button>
      </div>
      
    </div>
  </div>
</div>

@endsection
