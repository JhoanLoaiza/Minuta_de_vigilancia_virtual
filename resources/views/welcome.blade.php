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
<div class="logo">
          <div>
              <a href="/"> <jpg 
                <!-- For responsive images, use srcset and sizes -->
<img src=https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Escudo_Polic%C3%ADa_Nacional_de_Colombia.jpg/1200px-Escudo_Polic%C3%ADa_Nacional_de_Colombia.jpg
 width="80px"/>
                <jpg  />
       </a>
          </div>
          &nbsp;
  <h1 class="text-3xl text-green-500 font-bold underline">
    Policía Nacional!
  </h1>

    <h1>Bienvenido {{$nombre}} al sistema Minuta de Vigilancia Virtual</h1>
    <ul>
        
        @foreach ($botonesdenavegacion as $botonesdenavegacion)
        <li>
            {{ $botonesdenavegacion[ "nombre"] }} 
            
        </li>
        @endforeach

    </ul>
</body>
</html>
