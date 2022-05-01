@extends('layouts.principal2')

@section('contenido')
    <form action="{{ action([App\Http\Controllers\SaludoController::class, 'saludo'], ['eres el mejor'])}}" method="POST">
        @csrf <!-- Evitar forzar ejecutar cosas que no se quieren con el usuario -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{old('apellido')}}">
        </div>
        <button type="submit" class="btn btn-primary">Saludar</button>
    </form>
@endsection
