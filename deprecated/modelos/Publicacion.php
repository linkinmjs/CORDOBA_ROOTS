<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
	protected $fillable = [
		'usuario_id',
		'titulo',
		'contenido'
	];    

	public function usuario () 
	{
		return $this->belongTo(User::class, 'usuario_id');
	}

	public function comentarios ()
	{
		return $this->morphMany(Comentario::class, 'entidad');
	}

}
