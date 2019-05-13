<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use App\RegistrosSociosController;
use Illuminate\Foundation\Auth\User as Auth;

class RegistroSocio extends Auth implements AuthenticatableContract
{
	use Authenticatable;
	use Notifiable;
	
   protected $table = 'registro_socios';
   protected $fillable = ['nombre', 'apellido', 'telefono', 'email', 'password'];
   protected $hidden = [
        'password', 'remember_token',
    ];
   public $timestamps = true;
}
