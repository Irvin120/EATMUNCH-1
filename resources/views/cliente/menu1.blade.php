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
    <div class="" id="PEDIDOS">PEDIDOS</div>
    <div class="" id="">
        <img src="imagenes/logo.png" alt="" class="" id="Logo">
    </div>
</header>

<body>
    <div class="d-flex justify-content-around" id="ImgDeMenu">
        <img src="imagenes/imgMenu.png" alt="">
    </div>
    <div class="d-flex justify-content-around" id="botonesDeMenu">
        <a type="button" class="btn" id="btnComidas" href="menu1.html">
            <img src="imagenes/logoBisctec.png" alt="">
        </a>
        <a type="button" class="btn" href="menu2.html">
            <img src="imagenes/logoCafe.png" alt="">
        </a>
        <a type="button" class="btn" href="menu3.html">
            <img src="imagenes/logoNachos.png" alt="">
        </a>
    </div>


    <div id="nombreDePieDeMenu">
        <h2>Comidas</h2>
    </div>
</body>
</html>
