@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center text-slate-800 mb-10">Editar Equipo</h1>

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-2xl mx-auto">
        <form method="POST" action="{{ route('equipos.update', $equipo) }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="text-red-600 text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div>
                <label for="nombre" class="block text-sm font-medium text-slate-700">Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre', $equipo->nombre) }}" required
                    class="w-full mt-2 p-3 rounded-xl border border-gray-300" />
            </div>

            <div>
                <label for="precio" class="block text-sm font-medium text-slate-700">Precio</label>
                <input type="number" name="precio" value="{{ old('precio', $equipo->precio) }}" required
                    class="w-full mt-2 p-3 rounded-xl border border-gray-300" />
            </div>

            <div>
                <label for="descripcion" class="block text-sm font-medium text-slate-700">Descripción</label>
                <textarea name="descripcion" required
                    class="w-full mt-2 p-3 rounded-xl border border-gray-300">{{ old('descripcion', $equipo->descripcion) }}</textarea>
            </div>

            <div>
                <label for="fk_tipo_equipo" class="block text-sm font-medium text-slate-700">Tipo de equipo</label>
                <select name="fk_tipo_equipo" required class="w-full mt-2 p-3 rounded-xl border border-gray-300">
                    <option value="">Seleccioná un tipo</option>
                    @foreach ([1=>'Casco',2=>'Guante',3=>'Campera',4=>'Pantalones',5=>'Botas',6=>'Accesorios'] as $id => $nombre)
                        <option value="{{ $id }}" {{ $equipo->fk_tipo_equipo == $id ? 'selected' : '' }}>{{ $nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="imagen" class="block text-sm font-medium text-slate-700">Imagen (opcional)</label>
                <input type="file" name="imagen" class="w-full mt-2 p-2 rounded-xl border border-gray-300" />
            </div>

            <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-slate-800 font-bold py-3 rounded-xl shadow-md">
                Guardar Cambios
            </button>
        </form>
    </div>
</div>
@endsection
