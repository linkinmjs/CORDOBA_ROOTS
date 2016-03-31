<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banda extends Model
{
	
    protected $fillable = [
    	'nombre',
    	'descripcion'
    ];

	public function usuario()
	{
		return $this->belongsTo('app\Usuario', 'usuario_id');
	}
	public function eventos_bandas()
	{
		return $this->belongsToMany('App\Evento', 'evento_bandas');
	}
}
