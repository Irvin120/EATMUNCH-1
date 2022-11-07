@extends('admin.interfazGerente')

@section('title', 'Menu Gerente')

<link rel="stylesheet" href="{{ asset('css/interfacesGerente/menuGerente.css') }}">

@section('conten')

    <div class="cont-form">
        <div class="form">

            <div class="titleform">
                <br>
                <p class="center text-center">Agregar Producto</p>
            </div>

            <div class="cont-sections">

                <div class="section1">
                    <div class="conten-nombreProducto">
                        <p class="center text-center">Nombre Producto</p>
                        <div class="nombreProducto">
                            <input type="text" class="nombrePIn">
                        </div>
                    </div>

                    <div class="conten-desCon">
                        <div class="desCon1">
                            <p>Descripcion</p>
                            <input class="titulos-DesCon" type="text" name="" id="">
                        </div>

                        <div class="desCon2">
                            <p>Contenido</p>
                            <input class="titulos-DesCon" type="text" name="" id="">

                        </div>
                    </div>



                    <div class="contenPromocion">
                        <p>Promocion:</p>
                        <label><p>Si</p>
                            <input type="radio" name="" id="" value="Si">
                        </label>
                        <label><p>No</p>
                            <input type="radio" name="" id="" value="No">
                        </label>

                    </div>
                </div>



                <div class="section2">
                </div>
            </div>

        </div>

    </div>



@endsection
