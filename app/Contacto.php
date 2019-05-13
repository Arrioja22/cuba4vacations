<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ContactosController;

class Contacto extends Model
{
   protected $table = 'contactos';
   protected $fillable = ['nombre', 'telefono', 'comentario'];
   public $timestamps = true;
}
