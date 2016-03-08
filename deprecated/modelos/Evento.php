<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
	    protected $fillable = [
	    	'usuario_id',
	    	'nombre',
	    	'descripcion',
	    	'direccion',
	    	'fecha'
	    ];

	    protected $dates = [
	    	'created_at',
	    	'updated_at',
	    	'fecha'
	    ];

	    public function usuario ()
	    {
	    	return $this->belongTo(User::class, 'usuario_id');
	    }

	    public function comentarios()
	    {
	    	return $this->morphMany(Comentario::class, 'entidad');
	    }

	    public function banda ()
	    {
	    	return $this->belongToMany(Banda::class, 'evento_bandas', 'evento_id', 'banda_id');
	    }

}
