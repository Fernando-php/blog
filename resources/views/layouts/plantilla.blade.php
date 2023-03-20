<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="StyleSheet" href="{{ URL::asset('css/estilos.css'); }}" type="text/css">
    <title>@yield('title')</title>
</head>
<body>
  <div class="contenedor">
    <h1>Mi blog personal</h1>
    @yield('content')
    <br><a class="titulo" href="{{route('inicio')}}">Volver a Inicio</a>
  </div>
</body>
</html>