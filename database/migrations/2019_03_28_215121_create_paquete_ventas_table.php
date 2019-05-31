<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaqueteVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquete_ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('destino');
            $table->string('nom_paquete');
            $table->string('fecha_llegada');
            $table->string('fecha_salida');
            $table->string('show_nocturno')->nullable();
            $table->string('tours')->nullable();
            $table->string('nom_habitacion');
            $table->string('nom_cliente');
            $table->string('ape_cliente');
            $table->string('correo');
            $table->string('telefono');
            $table->string('pais');
            $table->integer('cant_personas');
            $table->string('comentario')->nullable();
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
        Schema::dropIfExists('paquete_ventas');
    }
}
