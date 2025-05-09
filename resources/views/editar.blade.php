@extends('layout')
@section('content')
<h2>Editar Película</h2>
<form action="{{ route('peliculas.update', $pelicula->id) }}" method="POST">
    @csrf @method('PUT')
    @include('formulario', ['pelicula' => $pelicula])
</form>
@endsection
