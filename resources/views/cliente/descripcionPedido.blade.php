<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/interfacesCliente/descripcionPedido.css')}}">

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

    <div class="d-flex justify-content-evenly">
        <button type="button" class="btn btn-warning btn-lg btn-block "id="btnMenu">MENU</button>
    </div>

    <table class="table table-bordered " id="tabla">

        <thead class="" id="ObjetosDeLaTabla">
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </thead>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>


        <div class="d-flex justify-content-around" id="Costo">
            <div id="NombreCostoTotal">
                Total
            </div>

            100$
        </div>


    <div class="d-flex justify-content-evenly">
        <button type="button" class="btn btn-lg btn-block "id="btnRealizarPedido">Realizar Pedido</button>
    </div>

</body>
</html>
