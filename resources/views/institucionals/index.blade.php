@extends('layouts.app')
@section('titulo', 'Consultar institucionals')
@section('contenido', )
    @foreach ($institucionals as $institucional)
    <div class="card w-96 bg-base-100 shadow-xl">
  <figure><img src="https://source.unsplash.com/random/800x600/?policeman&" /></figure>
  <div class="card-body">
    <h2 class="card-title">
    {{ $institucional->numero_arma }} 
      <div class="badge badge-secondary">grado:{{$institucional->sigla_vehiculo}}</div>
    </h2>
   
    <div class="card-actions justify-end">
      <div class="badge badge-outline">placa: {{ $institucional->chaleco_balistico}} </div> 
      <div class="badge badge-outline">Police</div>
    </div>
  </div>
</div>
     
        @endforeach
@endsection