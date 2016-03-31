@extends('layouts.navbar')

@section('contenido')

	<div class='container-fluid'>
		<div class='row'>
			<div class='col-xs-6 col-xs-offset-3'>

				<form class='form-horizontal' role='form' method='POST' enctype="multipart/form-data">
					{!! csrf_field() !!}

					<div class='form-group'>
					    <label for='nombreEvento'>Nombre del evento</label>
						<input type="text" class='form-control' name='nombre' placeholder='Ingrese el nombre...'>
					</div>
					<div class='form-group'>
						<label for='direccionEvento'>Dirección del evento</label>
						<input type='text' class='form-control' name='direccion' placeholder='Ingrese la dirección...'>
					</div>
					<div class='form-group'>
						<label for='descripcionEvento'>Descripción del evento</label>
						<textarea type='text' class='form-control' name='descripcion' placeholder='Ingrese la descripción...'></textarea>
					</div>
					<div class='form-group'>
						<label for='fechaEvento'>Fecha del evento</label>
						<input class='datetimepicker form-control' name='fecha' placeholder='Ingrese la fecha...'/>
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Imagen</label>
						<input type="file" name='imagen'>
						<p class="help-block">Ingresar imagenes en formato JPG</p>
					</div>
					<button type="submit" class="btn btn-default">Confirmar evento</button>
					
				</form>

				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

			</div>
		</div>
	</div>

@endsection