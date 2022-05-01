@extends('layouts.principal')

@section('titulo', 'Indice')

@section('contenido')
    <!-- Acceso al mismo lugar de diferentes maneras -->
    <a href="{{url('/hola')}}">Saludo</a>
    <a href="{{route('hola')}}">Saludo2</a>
@endsection
