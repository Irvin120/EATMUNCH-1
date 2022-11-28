@extends('admin.interfazGerente')

@section('title', 'Menu Gerente')

<link rel="stylesheet" href="{{ asset('css/interfacesGerente/menuGerente.css') }}">

@section('conten')

    <div class="cont-form">

        <form method="POST" action="{{ route('storeGerente') }}" enctype="multipart/form-data">
            @csrf
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
                                <input type="text" name="nombrePlatillo" class="nombrePIn">
                            </div>
                        </div>

                        <div class="conten-desCon">
                            <div class="desCon1">
                                <p>Descripcion</p>
                                <input class="titulos-DesCon" type="text" name="descripcionPlatillo">
                            </div>

                            <div class="desCon2">
                                <p>Contenido</p>
                                <input class="titulos-DesCon" type="text" name="contenidoPlatillo">

                            </div>
                        </div>
                        <div class="conten-categoria">
                            <div class="categoria">
                                <label for="#">Categoria: </label>
                                <select type="text" id="disabledSelect" name="categoriaPlatillo" class="select-form">
                                    <option>comidas</option>
                                    <option>bebidas</option>
                                    <option>postres</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="section2">
                        <div class="imagenSection2">
                            <div class="imagen2">
                                <input class="inpIma" type="file" name="imagenPlatillo">

                            </div>

                        </div>

                        <div class="precioSection2">


                            <div class="precio2">
                                <label class="label-precio" for="">Precio:</label>
                                <input class="input-number" type="number" placeholder="$" name="precioPlatillo">
                            </div>
                            <button class="btn btn-guardar">Guardar</button>

                        </div>
                    </div>
                </div>

            </div>
        </form>
        @php
            echo"comidas";
        @endphp

    </div>



@endsection
