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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nombrePlatillo', 60);
            $table->enum('categoriaPlatillo',['comidas', 'bebidas', 'postres']);
            $table->text('contenidoPlatillo');
            $table->text('descripcionPlatillo', 60);
            $table->integer('precioPlatillo');
            $table->string('imagenPlatillo');
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
        Schema::dropIfExists('menus');
    }
};
