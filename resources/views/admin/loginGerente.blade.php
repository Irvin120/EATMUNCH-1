<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>



<body>
    <div class="headerInicioWeb">
        <img class="logo-letras" src="{{asset('img/admin/inicio/letras-10.png')}}" alt="">
        <img class="logo-charola" src="{{asset('img/admin/inicio/logosolo-10.png')}}" alt="">



    </div>

    <video src="{{asset('video/dv.mp4')}}" autoplay loop muted ></video>

            <form class="formulario">

                <h1 class="titulo-form">LOGIN</h1>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class=" col-form-label">Contraseña</label>
                    <div class="">
                        <input type="password" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <button  type="submit" class="butto ">INGRESAR</button>
            </form>

</body>

</html>
