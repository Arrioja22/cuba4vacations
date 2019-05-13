<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RegistroClientesController;

class RegistroCliente extends Model
{
     protected $table = 'registro_clientes';
   protected $fillable = ['nombre', 'correo', 'contrasena', 'rol_id'];
   public $timestamps = true;
}
