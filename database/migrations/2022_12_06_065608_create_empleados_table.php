<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();

            $table->string("Nombre");
            $table->string("ApellidoP");
            $table->string("ApellidoM");
            $table->date("FechaN")->format('Y-m-d');
            $table->string("Direccion");
            $table->string("codigoP");
            $table->string("imagenEmpleado");
            $table->time("HoraEntrada");
            $table->time("HoraSalida");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
