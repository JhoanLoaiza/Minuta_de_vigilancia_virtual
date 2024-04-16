<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UACompatible" content="ie=edge">
    @vite('resources/css/app.css') 
    <title>Minuta de Vigilancia Virtual </title>
</head>
<body>
<h1 class="text-3xl text-green-500 font-bold underline">
    Hello world!
  </h1>
    <h1>Bienvenido {{$nombre}} al sistema Minuta de Vigilancia Virtual</h1>
    <ul>
        @foreach ($productos as $producto)
        <li>
            {{ $producto[ "nombre"] }} 
            ${{ $producto[ "precio"] }} 
        </li>
        @endforeach

    </ul>
</body>
</html>
