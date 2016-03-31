<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicidad extends Model
{
	
    protected $table = 'publicidades';
    protected $fillable = [
    	'nombre',
    	'descripcion',
    	'web'
    ];
    protected $dates = [
    	'fecha_vencimiento',
    	'created_at',
    	'updated_at'
    ];

    public function usuario()
    {
    	return $this->belongsTo('App\Usuario', 'usuario_id');
    }
}
