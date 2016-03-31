<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    
    protected $fillable = [
    	'usuario_id',
    	'nombre',
    	'descripcion',
    	'direccion'
    ];
    protected $dates = [
    	'fecha',
    	'created_at',
    	'updated_at'
    ];

	public function usuario()
	{
		return $this->belongsTo('App\Usuario', 'usuario_id');
	}

	public function eventos_comentarios()
	{
		return $this->belongsToMany('App\Usuario', 'evento_comentarios');
	}
	public function eventos_bandas()
	{
		return $this->belongsToMany('App\Banda', 'evento_bandas');
	}
}
