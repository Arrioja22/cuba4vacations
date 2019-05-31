<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PaqueteVentasController;
class PaqueteVenta extends Model
{
    protected $table = 'paquete_ventas';
    protected $fillable = ['nom_cliente', 'ape_cliente', 'correo', 'telefono', 'pais', 'fecha_llegada', 'fecha_salida', 'cant_personas', 'nom_paquete', 'nom_habitacion', 'show_nocturno', 'tours', 'destino'];
    public $timestamps = true;
}
