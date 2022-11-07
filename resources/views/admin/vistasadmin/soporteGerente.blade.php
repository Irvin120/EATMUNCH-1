@extends('admin.interfazGerente')

@section('title', 'Soporte Gerente')
<link rel="stylesheet" href="{{asset('css/interfacesGerente/soperteGerente.css')}}">

@section('conten')

<div class="contenSoporte">

<div class="row">
    <div class="col">
        <h1 class="h1-titulo text-center ">Soporte</h1>
    </div>
</div>
<div class="contencards overflow-hidden">

<div class="card-row row-cols-3 cards-soporte ">

    <div class="col text-center cardsoporte">1</div>
    <div class="col text-center cardsoporte">2</div>
    <div class="col text-center cardsoporte">3</div>
    <div class="col text-center cardsoporte">4</div>
    <div class="col text-center cardsoporte">5</div>
    <div class="col text-center cardsoporte">6</div>

</div>
</div>

</div>

@endsection
