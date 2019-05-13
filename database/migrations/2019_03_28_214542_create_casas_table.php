<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('socio_id');
            $table->string('nom_casa');
            $table->string('alojamiento');
            $table->string('tipo_habitacion');
            $table->integer('persona_x_habitacion');
            $table->integer('cant_individual');
            $table->integer('cant_matrimonial');
            $table->integer('cant_kingsize');
            $table->integer('cant_sofacama');
            $table->string('servicio_cuarto');
            $table->string('servicio_bano');
            $table->string('servicio_cocina');
            $table->string('servicio_sala');
            $table->string('servicio_extra');
            $table->integer('precio_renta');
            $table->string('tipo_moneda');
            $table->string('forma_pago');
            $table->string('direccion_casa');
            $table->string('referencia_casa');
            $table->string('comentarios');
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
        Schema::dropIfExists('casas');
    }
}
