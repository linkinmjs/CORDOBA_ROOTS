@extends('layouts.navbar')

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
        
            <form method="post">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label>Ingrese su correo electronico</label>
                    <input type="text" placeholder="Correo..." class="form-control" name="correo" value="{{ session('correo') }}">
                </div>

                <div class="form-group">
                    <label>Ingrese su contraseña</label>
                    <input type="password" placeholder="Contraseña..." class="form-control" name="contraseña">
                </div>

                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Confirmar</button>
            </form>

        </div>
    </div>
</div>

@endsection
