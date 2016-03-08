<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicidad extends Model
{
    protected $fillable = [
    	'nombre',
    	'descripcion',
    	'web',
    	'fecha_vencimiento'    	
    ]

    protected $dates = [
    	'created_at',
    	'updated_at',
    	'fecha_vencimiento'
    ]

    public function usuario ()
    {
    	return $this->belongTo(User::Class, 'usuario_id');
    }

}
