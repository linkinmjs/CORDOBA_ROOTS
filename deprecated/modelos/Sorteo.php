<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sorteo extends Model
{
	
	protected $fillable = [
		'usuario_id',
		'descripcion'
	];

	protected $dates = [
		'fecha_finalizado'
	];

	    public function comentarios()
	    {
	    	return $this->morphMany(Comentario::class, 'entidad');
	    }

	    public function usuarios ()
	    {
	    	return $this->belongToMany(User::class, 'usuario_sorteos', 'sorteo_id', 'usuario_id');
	    }	

}
