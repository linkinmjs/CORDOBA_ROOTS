<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
	protected $fillable = [
		'usuario_id',
		'contenido'
	];

	public function usuario()
	{
		return $this->belongTo(User::class, 'usuario_id');
	}

	public function entidad()    
	{
		return $this->morphTo();
	}

}
