<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class Catalogo extends Controller
{
    public function inicio() {
        return view('inicio');
    }

    public function index() {
        $peliculas = Pelicula::all();
        return view('listado_peliculas', compact('peliculas'));
    }

    public function create() {
        return view('agregar');
    }

    public function store(Request $request) {
        Pelicula::create($request->all());
        return redirect()->route('peliculas.index')->with('success', 'Película agregada');
    }

    public function edit($id) {
        $pelicula = Pelicula::findOrFail($id);
        return view('editar', compact('pelicula'));
    }

    public function update(Request $request, $id) {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->update($request->all());
        return redirect()->route('peliculas.index')->with('success', 'Película actualizada');
    }

    public function destroy($id) {
        Pelicula::destroy($id);
        return back()->with('success', 'Película eliminada');
    }
}

