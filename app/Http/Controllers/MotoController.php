<?php
namespace App\Http\Controllers;

use App\Models\Moto;
use Illuminate\Http\Request;

class MotoController extends Controller
{
    public function index()
    {
        $motos = Moto::all(); // Obtener todas las motos
        return view('motos', compact('motos'));
    }

    public function create()
    {
        return view('motos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'anio' => 'required|integer',
            'precio' => 'required|numeric',
            'descripcion' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);

        $moto = new Moto();
        $moto->nombre = $request->nombre;
        $moto->anio = $request->anio;
        $moto->precio = $request->precio;
        $moto->descripcion = $request->descripcion;

        if ($request->hasFile('imagen')) {
            $moto->imagen = $request->file('imagen')->store('motos', 'public');
        }

        $moto->save();

        return redirect()->route('motos.index')->with('success', 'Moto agregada exitosamente.');
    }
}

