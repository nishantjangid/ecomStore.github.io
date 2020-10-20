<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>E-Comm Store</title>
    <link rel="stylesheet"  type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet"  type="text/css" href="{{ asset('css/app.css') }}">

<style>
 .custom-login
 {
     height:500px;
     padding-top:100px;
 }
</style>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    <script src="{{ asset('js/jquery.min.js')}} "></script>
    <script src="{{ asset('js/bootstrap.min.js')}} "></script>
    <script>
    </script>
</body>
</html>