@extends('layouts.principal2')

@section('contenido')
    <div class="alert alert-primary" role="alert">
        {{'Hola ' . $nombre . ' ' . $apellido . ', ' . $comentario}}
    </div>
@endsection
