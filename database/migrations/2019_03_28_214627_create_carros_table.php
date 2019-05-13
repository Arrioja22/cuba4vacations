<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('socio_id');
            $table->string('nom_propietario');
            $table->string('modelo');
            $table->string('tipo_auto');
            $table->string('placas');
            $table->integer('cantpersonas_auto');
            $table->string('transmicion');
            $table->string('telefono');
            $table->date('fecha_disp_inicio');
            $table->date('fecha_disp_fin');
            $table->string('lugar');
            $table->integer('precio');
            $table->string('forma_pago');
            $table->string('tipo_moneda');
            $table->string('direccion');
            $table->string('referencias');
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
        Schema::dropIfExists('carros');
    }
}
