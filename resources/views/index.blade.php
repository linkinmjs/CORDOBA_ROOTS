@extends('layouts.navbar')

@section('contenido')

<!-- 
	columna noticias
 -->
	<div class="row">
		<div class="col-md-2">
		    @for ($i=0; $i<50; $i++)    
		    <h2>hola soy noticia</h2>
			@endfor
		</div>


		<div class="col-md-6 col-offset-xs-1">
            <h1>Hola soy un contenido</h1>
            @if(!Auth::check()) 
            	 <h2>-- Nadie conectado --</h2>
            @else
            	<h2>-- {{ Auth::user()->correo }} conectado --</h2>
            @endif			
		</div>

	</div>
@endsection