@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Listado de Motos</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($motos as $moto)
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between">
            <div>
                <h2 class="text-xl font-semibold">{{ $moto->nombre }} ({{ $moto->anio }})</h2>
                <p class="text-gray-600 mt-2">{{ $moto->descripcion }}</p>
                <p class="text-gray-800 font-semibold mt-2">Precio: ${{ number_format($moto->precio, 2) }}</p>

                @if ($moto->imagen)
                <img src="{{ asset('storage/' . $moto->imagen) }}" alt="{{ $moto->nombre }}"
                    class="mt-4 w-full h-48 object-cover rounded-lg">
                @endif
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ route('edit', $moto->id) }}"
                    class="px-4 py-2 bg-yellow-400 text-slate-800 font-semibold rounded-lg shadow hover:bg-yellow-500 transition">
                    Editar
                </a>

                <form action="{{ route('delete', $moto->id) }}" method="POST"
                    onsubmit="return confirm('¿Estás seguro de que querés eliminar esta moto? Esta acción no se puede deshacer.');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="px-4 py-2 bg-red-500 text-white font-semibold rounded-lg shadow hover:bg-red-600 transition">
                        Eliminar
                    </button>
                </form>

            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection