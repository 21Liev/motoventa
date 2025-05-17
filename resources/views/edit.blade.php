@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center text-slate-800 mb-10">Editar Moto</h1>

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-2xl mx-auto">
        <form method="POST" action="{{ route('motos.update', $moto->id) }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="nombre" class="block text-sm font-medium text-slate-700">Nombre</label>
                <input type="text" name="nombre" value="{{ $moto->nombre }}" required class="w-full mt-2 p-3 rounded-xl border border-gray-300" />
            </div>

            <div>
                <label for="anio" class="block text-sm font-medium text-slate-700">Año</label>
                <input type="number" name="anio" value="{{ $moto->anio }}" required class="w-full mt-2 p-3 rounded-xl border border-gray-300" />
            </div>

            <div>
                <label for="precio" class="block text-sm font-medium text-slate-700">Precio</label>
                <input type="number" name="precio" value="{{ $moto->precio }}" required class="w-full mt-2 p-3 rounded-xl border border-gray-300" />
            </div>

            <div>
                <label for="descripcion" class="block text-sm font-medium text-slate-700">Descripción</label>
                <textarea name="descripcion" required class="w-full mt-2 p-3 rounded-xl border border-gray-300">{{ $moto->descripcion }}</textarea>
            </div>

            <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-slate-800 font-bold py-3 rounded-xl shadow-md">
                Guardar Cambios
            </button>
        </form>
    </div>
</div>
@endsection
