@extends('admin.interfazGerente')

@section('title', 'Menu Gerente')

<link rel="stylesheet" href="{{ asset('css/interfacesGerente/menuGerente.css') }}">
<script src="{{ asset('js/image.js') }}" crossorigin="anonymouss"></script>
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
                                <input maxlength="30" type="text" name="nombrePlatillo" class="nombrePIn" required>
                            </div>
                        </div>

                        <div class="conten-desCon">
                            <div class="desCon1">
                                <p>Descripció</p>
                                <input maxlength="200" class="titulos-DesCon" type="text" name="descripcionPlatillo" required>
                            </div>

                            <div class="desCon2">
                                <p>Contenido</p>
                                <input maxlength="200" class="titulos-DesCon" type="text" name="contenidoPlatillo" required>

                            </div>
                        </div>
                        <div class="conten-categoria">
                            <div class="categoria">
                                <label for="#">Categoría: </label>
                                <select type="text" id="disabledSelect" name="categoriaPlatillo" class="select-form"
                                    required>
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


                                <div class="centerrrr">
                                    <div class="preview">
                                        <img id="file-ip-1-preview">
                                        <i class="fa-solid fa-images"></i>
                                    </div>
                                    <div class="form-input">
                                        <label for="file-ip-1" required>Subir</label>
                                        <input required name="imagenPlatillo" type="file" id="file-ip-1" accept="image/*"
                                            onchange="showPreview(event);" >
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="precioSection2">


                            <div class="precio2">
                                <label  class="label-precio" for="">Precio:</label>
                                <input min="1" max="999" maxlength="3" class="input-number" type="number" placeholder="$" name="precioPlatillo" required>
                            </div>
                            <button class="btn btn-guardar">Guardar</button>

                        </div>
                    </div>
                </div>

            </div>
        </form>
        @php
            echo 'comidas';
        @endphp

    </div>


@endsection
