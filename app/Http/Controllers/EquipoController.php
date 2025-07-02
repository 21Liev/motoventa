<?php

namespace App\Http\Controllers;

use App\Models\Equipo; // Asegúrate de que tienes el modelo Equipo
use Illuminate\Http\Request;

class EquipoController extends Controller
{

    public function index()
    {
        $equipos = Equipo::all(); // Obtener todos los equipos
        return view('equipo', compact('equipos')); // Asegúrate de que la vista sea equipos.index
    }

    public function create()
    {
        return view('equipos.create'); // Vista para crear un nuevo equipo
    }

    public function store(Request $request)
    {
        // Validación de los datos del equipo
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png,gif', // Si la imagen es opcional
        ]);

        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        $equipo->descripcion = $request->descripcion;
        $equipo->precio = $request->precio;

        // Si se sube una imagen
        if ($request->hasFile('imagen')) {
            $equipo->imagen = $request->file('imagen')->store('equipos', 'public');
        }

        $equipo->save();

        return redirect()->route('equipos.index')->with('success', 'Equipo agregado exitosamente.');
    }

    public function edit($id)
    {
        $equipo = Equipo::findOrFail($id); // Asegúrate de que el equipo existe
        return view('equipos.edit', compact('equipo')); // Ruta completa de la vista
    }


    public function update(Request $request, $id)
    {
        // Validación de los datos del equipo
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
        ]);

        $equipo = Equipo::findOrFail($id);
        $equipo->nombre = $request->nombre;
        $equipo->descripcion = $request->descripcion;
        $equipo->precio = $request->precio;


        $equipo->save();

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado correctamente.');
    }

    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);

        // Eliminar la imagen si existe

        $equipo->delete();

        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado correctamente');
    }
}
