@extends('admin.interfazGerente')

@section('title', 'Mesas Gerente')

<link rel="stylesheet" href="{{ asset('css/interfacesGerente/agregarPersonalGerente.css') }}">
<script src="https://kit.fontawesome.com/176f842465.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/image.js') }}" crossorigin="anonymouss"></script>

@section('conten')
    <div class="principal">
        <br>
        <div class="segunda-seccion">

            <br>
            <div class="agregar-mesero">
                <div class="title">
                    <p class="center text-center">Agregar Mesero</p>
                </div>

                <div class="datos-agrupados">

                    <div class="info">

                        <form action="">

                            <div class="conNombre mr">

                                <div class="conNombreN conN">
                                    <label for="Nombre">Nombre </label>
                                    <input class="inputN" type="text" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : '' }}" id="Nombre" required><br>
                                </div>

                                <div class="conNombreAP conN">
                                    <label for="ApellidoP">Apellido P.</label>
                                    <input class="inputN" type="text" name="ApellidoP"
                                        value="{{ isset($empleado->ApellidoP) ? $empleado->ApellidoP : '' }}"
                                        id="ApellidoP" required><br>
                                </div>

                                <div class="conNombreAM conN">
                                    <label for="ApellidoM">Apellido M.</label>
                                    <input class="inputN" type="text" name="ApellidoM"
                                        value="{{ isset($empleado->ApellidoM) ? $empleado->ApellidoM : '' }}"
                                        id="ApellidoM" required><br>
                                </div>
                            </div>

                            <div class="conFecha mr">
                                <label for="FechaN">Fecha de Nacimiento</label>
                                <input type="date" name="FechaN"
                                    value="{{ isset($empleado->FechaN) ? $empleado->FechaN : '' }}" id="FechaN" required>
                            </div>

                            <div class="conDireccion mr">
                                <label class="minDI" for="Direccion">Dirección</label>
                                <input type="text" name="Direccion"
                                    value="{{ isset($empleado->Direccion) ? $empleado->Direccion : '' }}" id="Direccion">

                                <label class="minDI" for="codigoP">C.P.</label>
                                <input type="number" name="codigoP"
                                    value="{{ isset($empleado->codigoP) ? $empleado->codigoP : '' }}" id="codigoP" required>
                            </div>


                            <div class="conHora mr">
                                <p>Horario</p>

                                <div class="conHoraE">
                                    <label for="HoraEntrada">Hora de entrada</label>
                                    <input type="time" name="HoraEntrada"
                                        value="{{ isset($empleado->HoraEntrada) ? $empleado->HoraEntrada : '' }}"
                                        id="HoraEntrada" required>
                                </div>
                                <div class="conHoraE">
                                    <label for="HoraSalida">Hora de salida</label>
                                    <input type="time" name="HoraSalida"
                                        value="{{ isset($empleado->HoraSalida) ? $empleado->HoraSalida : '' }}"
                                        id="HoraSalida" required>
                                </div>
                            </div>

                            <div class="conGuardar mr">
                                <input class="btnGuardar" type="submit"  onclick="return confirm('Desea Guardar')"  value="Guardar">
                                <br>
                                <a href="{{ url('empleado/') }}">Regresar</a>
                            </div>



                    </div>

                    <div class="conFoto">
                        <div class="imagenSection2">
                            <div class="imagen2">


                                <div class="centerrrr">
                                    <div class="preview">
                                        <img id="file-ip-1-preview">
                                        <i class="fa-solid fa-images"></i>
                                    </div>
                                    <div class="form-input">
                                        <label for="file-ip-1" required>Subir</label>
                                        
                                        <input required name="imagenEmpleado" type="file" id="file-ip-1" accept="image/*"
                                            onchange="showPreview(event);">
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
