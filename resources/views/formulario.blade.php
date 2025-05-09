@extends('layout')

@section('content')
<style>
    .form-container, .list-container {
    max-width: 800px;
    margin: 40px auto;
    background: rgba(255, 255, 255, 0.05);
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    color: white;
}

h2 {
    margin-bottom: 25px;
    color: #f1c40f;
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

.form-group input, 
.form-group textarea {
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    border: none;
    background-color: #1c1c1c;
    color: white;
}

.form-group textarea {
    resize: vertical;
    height: 100px;
}

.btn-submit, .btn-add {
    display: inline-block;
    background-color: #e67e22;
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    text-decoration: none;
    cursor: pointer;
    transition: background 0.3s ease;
}

.btn-submit:hover, .btn-add:hover {
    background-color: #d35400;
}

.movie-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    color: white;
}

.movie-table thead {
    background-color: #34495e;
}

.movie-table th, .movie-table td {
    padding: 14px;
    border-bottom: 1px solid #555;
    text-align: left;
}

.movie-table tbody tr:hover {
    background-color: #2c3e50;
}

.btn-edit, .btn-delete {
    display: inline-block;
    padding: 8px 12px;
    border-radius: 6px;
    text-decoration: none;
    color: white;
    margin-right: 5px;
    font-weight: bold;
}

.btn-edit {
    background-color: #3498db;
}

.btn-edit:hover {
    background-color: #2980b9;
}

.btn-delete {
    background-color: #e74c3c;
    border: none;
    cursor: pointer;
}

.btn-delete:hover {
    background-color: #c0392b;
}

.alert-success {
    background-color: #2ecc71;
    padding: 12px;
    border-radius: 8px;
    margin-bottom: 20px;
    color: white;
    text-align: center;
}

</style>
<div class="form-container">
    <h2>🎬 {{ isset($pelicula) ? 'Editar Película' : 'Agregar Película' }}</h2>

    <form method="POST" action="{{ isset($pelicula) ? route('peliculas.update', $pelicula->id) : route('peliculas.store') }}">
        @csrf
        @if(isset($pelicula)) @method('PUT') @endif

        <div class="form-group">
            <label>Título</label>
            <input type="text" name="titulo" value="{{ old('titulo', $pelicula->titulo ?? '') }}" required>
        </div>

        <div class="form-group">
            <label>Descripción</label>
            <textarea name="descripcion" required>{{ old('descripcion', $pelicula->descripcion ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label>Género</label>
            <input type="text" name="genero" value="{{ old('genero', $pelicula->genero ?? '') }}" required>
        </div>

        <div class="form-group">
            <label>Director</label>
            <input type="text" name="director" value="{{ old('director', $pelicula->director ?? '') }}" required>
        </div>

        <div class="form-group">
            <label>Fecha de Estreno</label>
            <input type="date" name="fecha_estreno" value="{{ old('fecha_estreno', $pelicula->fecha_estreno ?? '') }}" required>
        </div>

        <button type="submit" class="btn-submit">💾 Guardar</button>
    </form>
</div>
@endsection
