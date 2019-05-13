<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('destino');
            $table->string('ruta_img');
            $table->string('nombre_paquete');
            $table->integer('precio');
            $table->integer('cant_personas');
            $table->string('duracion');
            $table->string('translado_arport');
            $table->string('traslado_extra')->nullable();
            $table->string('hospedaje');
            $table->string('desayuno');
            $table->string('paladares');
            $table->string('asistencia_viaje');
            $table->string('cena_bienvenida');
            $table->string('tour')->nullable();
            $table->string('show_nocturno')->nullable();
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
        Schema::dropIfExists('paquetes');
    }
}
