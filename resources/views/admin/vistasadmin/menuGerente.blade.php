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
                    <div class="conten-categoria">
                        <div class="categoria">
                            <label for="#">Categoria: </label>
                            <select type="text" id="disabledSelect" name="categoria" class="select-form">
                                <option>Comida</option>
                                <option>Bebida</option>
                                <option>Postre</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="section2">
                    <div class="imagenSection2">
                        <div class="imagen2">
                            <img src="#" alt="Imagen Producto">

                        </div>

                    </div>

                    <div class="precioSection2">
                        <div class="precio2">
                            <label class="label-precio" for="">Precio:</label>
                            <input class="input-number" type="number" placeholder="$">

                        </div>
                        <a href="#" class="btn btn-guardar">Guardar</a>
                    </div>
                </div>
            </div>

        </div>

    </div>



@endsection
