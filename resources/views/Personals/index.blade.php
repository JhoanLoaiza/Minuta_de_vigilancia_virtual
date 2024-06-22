@extends('layouts.app')
@section('titulo', 'Consultar personals')
@section('contenido')
 
    @foreach ($personals as $personal)
       <div class="card w-96 bg-base-100 shadow-xl">
          {{-- <figure><img src="https://source.unsplash.com/random/800x600/?technology&{{ $producto->nombre }}" alt="{{ $producto->nombre }}" /></figure> --}}
          <figure><img src="https://loremflickr.com/200/200/store&{{ $personal->nombres}} " alt= "{{$personal->nombres}}" /></figure>
             <div class="card-body">
               <h2 class="card-title">
                 {{ $personal->nombres }} 
                 <div class="badge badge-secondary">Grado:{{$personal->grado}}</div>
              </h2>
              <p>{{ $personal->apellidos}}</p>
              <div class="card-actions justify-end">
                
              
                <div class="badge badge-outline">Placa: {{ $personal->placa}} </div> 
                <div class="badge badge-outline">Número Arma: {{ $personal->numero_arma}} </div> 
                <div class="badge badge-outline">Sigla Vehículo: {{ $personal->sigla_vehiculo}} </div> 
                <div class="badge badge-outline">Chaleco Balístico: {{ $personal->chaleco_balistico}} </div> 
                <div class="badge badge-outline">Lugar de Facción: {{ $personal->lugar_de_faccion}} </div> 
                <div class="badge badge-outline">Misión por Cumplir: {{ $personal->mision_por_cumplir}} </div> 

                <a href="{{route('personals.edit', $personal->id)}}" class="btn btn-xs btn-secondary">Editar</a>
                <form action="{{ route('personals.destroy', $personal->id) }}" method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit" class="btn btn-xs btn-error">Eliminar</button>
                </form>
                  
              </div>
           </div>
       </div>

        @endforeach
    
@endsection



