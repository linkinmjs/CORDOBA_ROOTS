<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{

    protected $table = 'Usuarios';

    protected $fillable = [
        'nombre',
        'correo',
        'password',
        'ip',
        'dispositivo'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function eventos()
    {
    	return $this->hasMany('App\Evento', 'eventos_id');
    }
    public function bandas()
    {
    	return $this->hasMany('App\Banda', 'banda_id');
    }
    public function publicaciones()
    {
    	return $this->hasMany('App\Publicacion', 'publicacion_id');
    }
	public function publicidades()    
	{
		return $this->hasMany('App\Publicidad', 'publicidad_id');
	}

	public function eventos_comentarios()
	{
		return $this->belongsToMany('App\Evento', 'evento_comentarios');
	}
	public function publicaciones_comentarios()
	{
		return $this->belongsToMany('App\Publicacion', 'publicacion_comentarios');
	}
	public function sorteos_comentarios()
	{
		return $this->belongsToMany('App\Sorteo', 'sorteo_comentarios');
	}
	public function sorteos_usuarios()
	{
		return $this->belongsToMany('App\Sorteo', 'sorteo_usuarios');
	}



}
