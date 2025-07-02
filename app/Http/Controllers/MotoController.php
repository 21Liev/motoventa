<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use Illuminate\Http\Request;

class MotoController extends Controller
{

public function index(Request $request)
{
    $categoria = $request->query('categoria');

    $motos = Moto::when($categoria, function ($query) use ($categoria) {
        return $query->where('fk_tipo_moto', $categoria);
    })->get();

    return view('motos', compact('motos', 'categoria'));
}

    public function store(Request $request)
{
    // Validaciones
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'anio' => 'required|integer|min:1900|max:' . date('Y'), // Validación para el año (no puede ser menor a 1900 ni mayor al año actual)
        'precio' => 'required|numeric|min:0', // Precio debe ser un número mayor o igual a 0
        'descripcion' => 'required|string|max:1000', // Descripción no puede exceder 1000 caracteres
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Imagen (opcional) con un máximo de 2MB
    ]);

    // Si la validación pasa, guardar la moto
    $moto = new Moto();
    $moto->nombre = $request->nombre;
    $moto->anio = $request->anio;
    $moto->precio = $request->precio;
    $moto->descripcion = $request->descripcion;

    // Si hay una imagen, guardarla
    if ($request->hasFile('imagen')) {
        $imagePath = $request->file('imagen')->store('public/motos');
        $moto->imagen = basename($imagePath);
    }

    $moto->save();

    return redirect()->route('motos.index')->with('success', 'Moto agregada con éxito');
}


    public function create()
    {
        return view('motos.create');
    }

    public function catalogo() /*creo que esto no lo estamos usando */
    {
        $motos = Moto::all();
        return view('motos', compact('motos'));
    }

    public function edit($id)
    {
        $moto = Moto::findOrFail($id); // Busca la moto con el id dado
        return view('motos.edit', compact('moto')); // La vista debe estar en resources/views/motos/edit.blade.php
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'anio' => 'required|integer',
            'precio' => 'required|numeric',
            'descripcion' => 'required|string',
            // 'imagen' => 'nullable|image|max:2048', // si lo volvés a usar
        ]);

        $moto = Moto::findOrFail($id);
        $moto->nombre = $request->nombre;
        $moto->anio = $request->anio;
        $moto->precio = $request->precio;
        $moto->descripcion = $request->descripcion;

        // Si volvés a usar imagen:
        // if ($request->hasFile('imagen')) {
        //     $moto->imagen = $request->file('imagen')->store('motos', 'public');
        // }

        $moto->save();

        return redirect()->route('motos.index')->with('success', 'Moto actualizada correctamente.');
    }

    public function delete($id)
    {
        $moto = \App\Models\Moto::findOrFail($id);
        $moto->delete();

        return redirect()->route('motos.index')->with('success', 'Moto eliminada correctamente');
    }
}
