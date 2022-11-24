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
        Schema::create('gerentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombreGerente',40);
            $table->unsignedBigInteger('admin_id');
            $table->string('direccionGerente',50);
            $table->string('correoGerente',50);
            $table->string('telefonoGerente',10);
            $table->string('contraseñaGerente',20);
            $table->timestamps();
            $table->foreign('admin_id')->references('id') -> on ('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gerentes');
    }
};
