
@extends('layouts.app') 

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold mb-6 text-[#3c340e]">Lista de Clientes</h1>

    <table class="min-w-full bg-white rounded-xl shadow overflow-hidden">
        <thead class="bg-[#E5CA17] text-[#3c340e]">
            <tr>
                <th class="text-left px-6 py-4">ID</th>
                <th class="text-left px-6 py-4">Nombre</th>
                <th class="text-left px-6 py-4">Correo</th>
                <th class="text-left px-6 py-4">Registrado</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse ($clientes as $cliente)
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4">{{ $cliente->id }}</td>
                    <td class="px-6 py-4">{{ $cliente->name }}</td>
                    <td class="px-6 py-4">{{ $cliente->email }}</td>
                    <td class="px-6 py-4">{{ $cliente->created_at->format('d/m/Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">No hay clientes registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
