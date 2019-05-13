<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ComentariosController;
class Comentario extends Model
{
   protected $table = 'comentarios';
   protected $fillable = ['nombre', 'fecha', 'comentario'];
   public $timestamps = true;
}
