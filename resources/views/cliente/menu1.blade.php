<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/interfacesCliente/menu1.css')}}">
</head>

<header class="d-flex justify-content-around ">
    <div class="" id="NumMesa">Mesa
        <br> 12</div>
    <div class="" id="TituloMenu">MENU</div>
    <div class="" id="">
        <img src="{{asset('img/admin/inicio/logo1_Mesa de trabajo 1.png')}}" alt="" class="" id="Logo">
    </div>
</header>

<body>
    <div class="d-flex justify-content-around" id="ImgDeMenu">
        <img src="{{asset('img/cliente/imgMenu.png')}}" alt="">
    </div>
    <div class="d-flex justify-content-around" id="botonesDeMenu">
        <a type="button" class="btn" id="btnComidas" href="{{route('menu1Cliente')}}">
            <img src="{{asset('img/cliente/logoBisctec.png')}}" alt="">
        </a>
        <a type="button" class="btn" id="btnBebidas" href="{{route('menu2Cliente')}}">
            <img src="{{asset('img/cliente/logoCafe.png')}}" alt="">
        </a>
        <a type="button" class="btn" id="btnPostres" href="{{route('menu3Cliente')}}">
            <img src="{{asset('img/cliente/logoNachos.png')}}" alt="">
        </a>
    </div>


    <div id="nombreDePieDeMenu">
        <h2>Comidas</h2>
    </div>
</body>
</html>
