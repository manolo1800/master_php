<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>titulo-@yield('titulo')</title>
</head>
<body>
    @section('header')
        <h1>CABECERA </h1>
    @show

    
    <div id="container">
        @yield('content')
    </div>
    

    @section('footer')
        <h2>footer</h2>
    @show

</body>
</html>