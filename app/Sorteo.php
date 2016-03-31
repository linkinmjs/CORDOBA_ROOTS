<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sorteo extends Model
{
	
    protected $fillable = [
    	'nombre',
    	'descripcion'
    ];
    protected $dates = [
    	'fecha_finalizado',
    	'created_at',
    	'updated_at'
    ]

    public function sorteos_usuarios()
    {
    	return $this->belongsToMany('App\Usuario', 'sorteo_usuarios');
    }
    public function sorteo_comentarios()
    {
    	return $this->belongsToMany('App\Usuario', 'sorteo_comentarios');
    }
}
