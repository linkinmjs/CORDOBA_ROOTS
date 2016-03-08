<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banda extends Model
{
    protected $fillable = [
    	'nombre',
    	'descripcion'
    ];

    public function usuario () 
    {
    	return $this->belongTo(User::class, 'usuario_id');
    }
    public function eventos ()
    {
        return $this->belongsToMany(Evento::class, 'evento_bandas', 'banda_id', 'evento_id');
    }

}
