@extends('layouts.app')

@section('content')

    <div class="max-w-6xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-6">Nuestras Sucursales</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Ejemplo de sucursal --}}
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Sucursal Palermo</h2>
                <p class="text-gray-700">Av. Santa Fe 1234, CABA</p>
                <p class="text-gray-700">Tel: (011) 1234-5678</p>
                <img src="https://images.unsplash.com/photo-1581376972991-5cf77be88aaf?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>

            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Sucursal Rosario</h2>
                <p class="text-gray-700">Bv. Oroño 456, Rosario</p>
                <p class="text-gray-700">Tel: (0341) 456-7890</p>
                <img src="https://images.unsplash.com/photo-1706062202423-e6655d342741?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>

            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Sucursal Córdoba</h2>
                <p class="text-gray-700">Av. Colón 789, Córdoba</p>
                <p class="text-gray-700">Tel: (0351) 321-6543</p>
                <img src="https://images.unsplash.com/photo-1676247032870-ad07a462a864?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
        </div>
    </div>

@endsection
