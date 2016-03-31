<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
	
    protected $table = 'publicaciones';
    protected $fillable = [
    	'titulo',
    	'contenido'
    ];    

    public function usuario() 
    {
    	return $this->belongsTo('App\Usuario', 'usuario_id');
    }
    
    public function publicaciones_comentarios()
    {
    	return $this->belongsToMany('App\Usuario', 'publicacion_comentarios');
    }
}
