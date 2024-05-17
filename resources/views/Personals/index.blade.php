@extends('layouts.app')
@section('titulo', 'Consultar personals')
@section('contenido', )
    @foreach ($personals as $personal)
    <div class="card w-96 bg-base-100 shadow-xl">
  <figure><img src="https://source.unsplash.com/random/800x600/?policeman&{{ $personal->nombres}} " alt= "{{$personal->nombres}}" /></figure>
  <div class="card-body">
    <h2 class="card-title">
    {{ $personal->nombres }} 
      <div class="badge badge-secondary">grado:{{$personal->grado}}</div>
    </h2>
    <p>{{ $personal->apellidos}}</p>
    <div class="card-actions justify-end">
      <div class="badge badge-outline">placa: {{ $personal->placa}} </div> 
      <div class="badge badge-outline">Police</div>
    </div>
  </div>
</div>
     
        @endforeach
@endsection



