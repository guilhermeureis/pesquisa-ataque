<!DOCTYPE html>
<html>
<head>
    <title>
        @yield( 'title')
    </title>
    <!-- Define a viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Adicionar CSS Bootstrap-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>

    @yield('js')


</head>
<body>
    @yield('body')

    <!-- Adicionar JavaScript -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    @yield('js')

</body>
</html>