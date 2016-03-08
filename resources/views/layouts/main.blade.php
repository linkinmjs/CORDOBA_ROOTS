<!DOCTYPE html>
<html>
    <head>
        <title>Cordoba Roots</title>
        <link href="bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="estilosJquery.js"></script>
        <!-- <link href="estilos.css" rel='stylesheet' type='text/css'/> -->
        <link rel="stylesheet" href="{{ URL::asset('styles.css') }}">
    </head>

    <body>
        <div id="body"></div>

            @yield('navbar')

            @yield('contenido')

        
    </body>
</html>
