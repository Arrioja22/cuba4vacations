<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\DestinosController;
class Destino extends Model
{
   protected $table = 'destinos';
   protected $fillable = ['nombre_destino', 'descripcion'];
   public $timestamps = true; 
}
