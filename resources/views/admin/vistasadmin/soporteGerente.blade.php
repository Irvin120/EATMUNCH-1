@extends('admin.interfazGerente')

@section('title', 'Soporte Gerente')
<link rel="stylesheet" href="{{ asset('css/interfacesGerente/soperteGerente.css') }}">
<script src="https://kit.fontawesome.com/176f842465.js" crossorigin="anonymous"></script>


@section('conten')

    <div class="cont-soporte">
        <div class="soporte">
            <div class="titleform">
                <br>
                <p class="center text-center">Soporte</p>
            </div>
            <div class="soporte1">
                <div class="cards-soporte card1">
                    <p class="text text-center">Registro</p>
                    <p><i class="fa-solid fa-address-card"></i></p>
                </div>
                <div class="cards-soporte card2">
                    <p class="text text-center">Mesas</p>
                    <p><i class="fa-solid fa-table-picnic"></i></p>
                </div>
                <div class="cards-soporte card3">
                    <p class="text text-center">Personal</p>
                    <p><i class="fa-solid fa-users"></i></p>

                </div>
            </div>

            <div class="soporte2">
                <div class="cards-soporte card1">
                    <p class="text text-center">Menu</p>
                    <p><i class="fa-solid fa-utensils"></i></p>
                </div>
                <div class="cards-soporte card2">
                    <p class="text text-center">Clientes</p>
                    <p><i class="fa-solid fa-address-card"></i></p>
                </div>
                <div class="cards-soporte card3">
                    <p class="text text-center">Meseros</p>
                    <p><i class="fa-solid fa-address-card"></i></p>
                </div>

            </div>

        </div>
    </div>

@endsection
