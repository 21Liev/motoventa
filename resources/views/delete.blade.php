@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10 text-center">
    <h1 class="text-2xl font-bold mb-4">¿Estás seguro que querés eliminar esta moto?</h1>
    <p class="mb-6">{{ $moto->nombre }} ({{ $moto->anio }})</p>

    <form action="{{ route('motos.destroy', $moto->id) }}" method="POST" class="flex justify-center gap-4">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-red-600">Sí, eliminar</button>
        <a href="{{ route('motos.index') }}" class="bg-gray-300 px-6 py-2 rounded-lg hover:bg-gray-400">Cancelar</a>
    </form>
</div>
@endsection
