<!DOCTYPE html>
<html>
    <head>
        <title>Cordoba Roots</title>
        <link href="bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <!-- jquery ui -->
        <link rel="stylesheet" href="{{ URL::asset('jquery-ui/jquery-ui.min.css') }}">
        <script src="jquery-ui/jquery-ui.min.js"></script>

        <!-- datepicker -->
        <link rel="stylesheet" href="{{ URL::asset('datepicker/jquery-ui-timepicker-addon.css') }}"/>
        <script src="datepicker/jquery-ui-timepicker-addon.js"></script>

        <!-- styles -->
        <link rel="stylesheet" href="{{ URL::asset('styles.css') }}">


    </head>

    <body>
    
        @yield('navbar')

        @yield('contenido')

        <script src="estilosJquery.js"></script>        
    
    </body>
</html>
