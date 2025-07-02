@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center text-slate-800 mb-10">Agregar Nuevo Equipo</h1>

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-2xl mx-auto">
        <form method="POST" action="{{ route('equipos.store') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf

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
                <input type="text" name="nombre" value="{{ old('nombre') }}" required
                    class="w-full mt-2 p-3 rounded-xl border border-gray-300" />
            </div>

            <div>
                <label for="precio" class="block text-sm font-medium text-slate-700">Precio</label>
                <input type="number" name="precio" value="{{ old('precio') }}" required
                    class="w-full mt-2 p-3 rounded-xl border border-gray-300" />
            </div>

            <div>
                <label for="descripcion" class="block text-sm font-medium text-slate-700">Descripción</label>
                <textarea name="descripcion" required class="w-full mt-2 p-3 rounded-xl border border-gray-300">{{ old('descripcion') }}</textarea>
            </div>

            <div>
                <label for="fk_tipo_equipo" class="block text-sm font-medium text-slate-700">Tipo de equipo</label>
                <select name="fk_tipo_equipo" required class="w-full mt-2 p-3 rounded-xl border border-gray-300">
                    <option value="">Seleccioná un tipo</option>
                    <option value="1">Casco</option>
                    <option value="2">Guante</option>
                    <option value="3">Campera</option>
                    <option value="4">Pantalones</option>
                    <option value="5">Botas</option>
                    <option value="6">Accesorios</option>
                </select>
            </div>

            <div>
                <label for="imagen" class="block text-sm font-medium text-slate-700">Imagen</label>
                <input type="file" name="imagen" class="w-full mt-2 p-2 rounded-xl border border-gray-300" />
            </div>

            <div class="flex justify-center items-center">
                <button type="submit"
                    class="rounded px-6 py-4 bg-[#ebbf30] text-[#3c340e] hover:ring-2 hover:ring-[#968832] transition-all shadow-lg">
                    Agregar Equipo
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
