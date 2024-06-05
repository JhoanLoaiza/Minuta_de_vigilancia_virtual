@extends('layouts.app')
@section('titulo', 'Crear Personal')
@section('cabecera', 'Crear Personal')  
@section('contenido') 
    <div class="flex justify-center my-6">
        <div class="card w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                {{-- Formulario para crear un producto --}}
                <form action=" {{route('personals.store')}}" method="POST">
                    @csrf
                    {{-- Nombres --}}
                    <div class="form-control">
                        <label class="label" for="nombres">
                            <span class="label-text">Nombres</span>
                        </label>
                        <input type="text" name="nombres" placeholder="Nombres del personal"  class="input input-bordered" required/>
                    </div>
                    {{-- Apellidos --}}
                    <div class="form-control">
                        <label class="label" for="apellidos">
                            <span class="label-text">Apellidos</span>
                        </label>
                        <input type="text" name="apellidos" placeholder="Apellidos del personal" class="input input-bordered" required />
                    </div>
                    {{-- Grado --}}
                    <div class="form-control">
                        <label class="label" for="grado">
                            <span class="label-text">Grado</span>
                        </label>
                        <input type="text" name="grado" id="grado" placeholder="grado_del_personal" class="input input-bordered" required />
                    </div>
                    {{-- Placa --}}
                    <div class="form-control">
                        <label class="label" for="placa">
                            <span class="label-text">Placa</span>
                        </label>
                        <input type="number" name="placa" id="placa" placeholder="placa_del_personal" class="input input-bordered"required/>
                    </div>
                    {{-- Número Arma--}}
                    <div class="form-control">
                        <label class="label" for="numero_arma">
                            <span class="label-text">Número Arma</span>
                        </label>
                        <input type="text-number" name="numero_arma"  placeholder="numero_arma" class="input input-bordered" required />
                    </div>
                    {{-- Sigla Vehículo--}}
                    <div class="form-control">
                        <label class="label" for="sigla_vehiculo">
                            <span class="label-text">Sigla Vehículo</span>
                        </label>
                        <input type="number" name="sigla_vehiculo"  placeholder="sigla_vehiculo" class="input input-bordered" required />
                    </div>
                    {{-- Chaleco Balístico --}}
                    <div class="form-control">
                        <label class="label" for="chaleco_balistico">
                            <span class="label-text">Chaleco Balístico</span>
                        </label>
                        <input type="number" name="chaleco_balistico"  placeholder="chaleco_balistico" class="input input-bordered" required />
                    </div>
                    {{-- Lugar de facción --}}
                    <div class="form-control">
                        <label class="label" for="lugar_de_faccion">
                            <span class="label-text">Lugar de facción </span>
                        </label>
                        <input type="text" name="lugar_de_faccion"  placeholder="lugar_de_faccion" class="input input-bordered" required/>
                    </div>
                    {{-- Misión por cumplir --}}
                    <div class="form-control">
                        <label class="label" for="mision_por_cumplir">
                            <span class="label-text">Misión por cumplir </span>
                        </label>
                        <input type="text" name="mision_por_cumplir"  placeholder="mision_por_cumplir" class="input input-bordered" required />
                    </div>
                    {{-- boton de enviar --}}
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Crear Personal</button>
                        <a href="{{ route('personals.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection