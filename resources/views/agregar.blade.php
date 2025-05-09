@extends('layout')
@section('content')
<h2>Agregar Película</h2>
<form action="{{ route('peliculas.store') }}" method="POST">
    @csrf
    @include('formulario')
</form>
@endsection
