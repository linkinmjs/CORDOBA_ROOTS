<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function eventos ()
    {
        return $this->hasMany(Evento::class, 'usuario_id');
    }
    public function bandas ()
    {
        return $this->hasMany(Banda::class, 'usuario_id');
    }    
    public function publicaciones ()
    {
        return $this->hasMany(Publicacion::class, 'usuario_id');
    }
    public function publicidades ()
    {
        return $this->hasMany(Publicidad::class, 'usuario_id');
    }

}
