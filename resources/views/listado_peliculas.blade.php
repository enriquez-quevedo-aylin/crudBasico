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
<div class="list-container">
    <h2>📽️ Listado de Películas</h2>
    <a href="{{ route('peliculas.create') }}" class="btn-add">➕ Agregar Nueva</a>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <table class="movie-table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Género</th>
                <th>Director</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($peliculas as $p)
            <tr>
                <td>{{ $p->titulo }}</td>
                <td>{{ $p->descripcion }}</td>
                <td>{{ $p->genero }}</td>
                <td>{{ $p->director }}</td>
                <td>{{ $p->fecha_estreno }}</td>
                <td>
                    <a href="{{ route('peliculas.edit', $p->id) }}" class="btn-edit">✏️</a>
                    <form action="{{ route('peliculas.destroy', $p->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn-delete">🗑️</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
