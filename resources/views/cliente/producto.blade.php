<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/interfacesCliente/producto.css')}}">
</head>
<header class="d-flex justify-content-around ">
    <div class="" id="NumMesa">Mesa
        <br> 12</div>
    <div class="" id="PEDIDOS">PEDIDOS</div>
    <div class="" id="">
        <img src="imagenes/logo.png" alt="" class="" id="Logo">
    </div>
</header>
<body id="body">
    <div id="anuncio">
        <img src="imagenes/imgProducto.png" alt="">
    </div>

    <div>
        <h2>Pozole rojo de pollo</h2>
    </div>
    <div class="d-flex justify-content-evenly">
        <div>Descripción:</div>

        <div>Contenido:</div>
    </div>

    <div class="d-flex justify-content-evenly">
        <div id="precio">
            <h2>Precio: $25</h2>
        </div>
    </div>

    <div class="d-flex justify-content-evenly">
        <button type="button" class="btn btn-lg btn-block "id="btnAgregar">Agregar</button>
    </div>

</body>
</html>
