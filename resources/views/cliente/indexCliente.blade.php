<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/interfacesCliente/index.css')}}">



</head>
<header class="d-flex justify-content-around ">
    <div class="" id="NumMesa">Mesa
        <br> 12</div>
    <div class="" id="PEDIDOS">PEDIDOS</div>
    <div class="" id="">
        <img src="{{asset('img/cliente/logo.png')}}" alt="" class="" id="Logo">
    </div>
</header>
<body>
    <div id="anuncio">
        <img src="{{asset('img/cliente/imgHamburgesa.png')}}" alt="">
    </div>
    <div class="d-flex justify-content-evenly">
        <button type="button" id="btn" class="btn btn-orange">PEDIR</button>

        <button type="button" id="btn1" class="btn btn-orange">CUENTA</button>
    </div>
    <div class="bg-orange rounded" id="Progreso">
        <h2>PROGRESO DEL PEDIDO</h2>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="d-flex justify-content-around">
            <div>Ordenando</div>
            <div>Preparando</div>
            <div>Entregado</div>

        </div>
    </div>
    <div class="d-flex justify-content-evenly">
        <button type="button" class="btn btn-lg btn-block "id="btnSalir">Salir</button>
    </div>

</body>
</html>
