<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')Inicio-Admin</title>
    <link rel="icon" href="{{asset('img/admin/inicio/logoEM.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/administracion.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/176f842465.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="row cssrow">
        <div class="col-3 text-center align-self-center"><img src="{{ asset('img/admin/inicio/letras-10.png') }}"alt=""></div>
        <div class="col text-center align-self-center"><a class=" nav-link liconten" href="{{route('mesasGerente')}}">Mesas</a> </div>
        <div class="col text-center align-self-center"><a class=" nav-link liconten" href="{{route('pedidosGerente')}}">Pedidos</a></div>
        <div class=" col text-center align-self-center"><a class=" nav-link liconten" href="{{route('personalGerente')}}">Personal</a></div>
        {{-- <div class="col text-center align-self-center"><a class=" nav-link liconten" href="{{route('menuGerente')}}">Menu</a></div> --}}
        <div class="col text-center align-self-center btn-group" role="group">
            <button type="button" class="btn dropdown-toggle button-hover" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('menuGerente')}}">Menu</a></li>
              <li><a class="dropdown-item" href="{{route('comidasGerente')}}">Comidas</a></li>
              <li><a class="dropdown-item" href="{{route('bebidasGerente')}}">Bebidas</a></li>
              <li><a class="dropdown-item" href="{{route('postresGerente')}}">Postres</a></li>
            </ul>
          </div>

        <div class="col text-center align-self-center"><a class=" nav-link liconten" href="{{route('soporteGerente')}}">Ayuda</a></div>
        <div class="col-3 text-center align-self-center">

            <div class="row cssrow2">
                <div class="col-6 align-self-center licontengerente" ><a class="nav-link link-usuario" href="{{route('loginGerente')}}">Irvin Ignacio Cueto Lopez</a></div>
                <div class="col-6  contenedor-imagen-usuario"><img class="img-fluid imagen-usuario" src="{{ asset('img/admin/inicio/imagen-login.png') }}"
                        alt=""></div>
            </div>
        </div>
    </div>



    @yield('conten')



</body>

</html>
