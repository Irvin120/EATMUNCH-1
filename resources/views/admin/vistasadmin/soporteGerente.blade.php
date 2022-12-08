@extends('admin.interfazGerente')

@section('title', 'Soporte Gerente')
<link rel="stylesheet" href="{{ asset('css/interfacesGerente/soperteGerente.css') }}">
<script src="https://kit.fontawesome.com/176f842465.js" crossorigin="anonymous"></script>


@section('conten')

    <div class="cont-soporte">
        <div class="soporte">
            <div class="titleform">
                <br>
                <p class="center text-center">Ayuda</p>
            </div>
            <div class="soporte1">
                <div class="cards-soporte card1">
                    <p class="text text-center">Registro</p>
                    <p class="icons contenedor"><i class="fa-solid fa-address-card imagen"></i></p>
                </div>
                <div class="cards-soporte card2">

                    <p class="text text-center">Mesas</p>
                    <p class="icons contenedor"><img class="icon-table imagen" src="{{asset('img/icons/table.png')}}" alt=""></p>
                </div>
                <div class="cards-soporte card3">
                <a target="_blank" href="https://drive.google.com/file/d/14jJKzjSY8bPyLdNplZx2u90q-Ro25_VR/view?usp=sharing">
                    <p class="text text-center">Personal</p>
                    <p class="icons contenedor"><i class="fa-solid fa-users imagen"></i></p>
                    </a>
                </div>
            </div>

            <div class="soporte2">
                <div class="cards-soporte card1">
                   <a target="_blank" href="https://drive.google.com/file/d/1TyZJaaT5JIvn_lesr7H8e8nuZnkKRrSO/view?usp=share_link">
                    <p class="text text-center">Menu</p>
                    <p class="icons contenedor"><i class="fa-solid fa-utensils imagen mcm"></i></p>
                    </a>
                </div>
                <div class="cards-soporte card2">
                    <p class="text text-center">Clientes</p>
                    <p class="icons contenedor"><i class="fa-regular fa-address-book imagen mcm"></i></p>
                </div>
                <div class="cards-soporte card3">
                    <p class="text text-center">Meseros</p>
                    <p class="icons contenedor"><i class="fa-solid fa-bell-concierge imagen mcm"></i></p>
                </div>

            </div>

        </div>
    </div>

@endsection
