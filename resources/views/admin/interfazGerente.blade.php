<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')Inicio-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/administracion.css') }}">

</head>

<body>

    <div class="row cssrow">
        <div class="col-3 text-center align-self-center"><img src="{{ asset('img/admin/inicio/logoEM.png') }}"alt=""></div>
        <div class="col text-center align-self-center">Mesas</div>
        <div class="col text-center align-self-center">Pedidos</div>
        <div class="col text-center align-self-center">Personal</div>
        <div class="col text-center align-self-center">Menu</div>
        <div class="col text-center align-self-center">Soporte</div>
        <div class="col-3 text-center align-self-center">

            <div class="row cssrow2">
                <div class="col-6 align-self-center">Gerente1</div>
                <div class="col-6  "><img class="img-fluid" src="{{ asset('img/admin/inicio/imagen-login.png') }}"
                        alt=""></div>
            </div>
        </div>
    </div>



    @yield('conten')



</body>

</html>
