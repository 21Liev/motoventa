@extends('layouts.app')

@section('content')
<main>
    {{-- Titulo --}}
    <div>
        <h2 class="text-4xl text-center mb-12 font-extrabold font-archivo text-[#87761f] mt-20">
            NUESTRAS MOTOS
        </h2>
    </div>
    {{-- Botones de las motos --}}
    <section class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 p-8 bg-white shadow-2xl shadow-[#0000004f] rounded-3xl">
        <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/deportiva.png" alt="Moto deportiva" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">DEPORTIVA</span>
        </a>
        <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/scooter.png" alt="Moto scooter" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">SCOOTER</span>
        </a>

        <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/enduro.png" alt="Moto enduro" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">ENDURO</span>
        </a>

        <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/chopper.png" alt="Moto chopper" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">CHOPPER</span>
        </a>

        <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/naked.png" alt="Moto naked" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">NAKED</span>
        </a>

        <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/touring.png" alt="Moto touring" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">TOURING</span>
        </a>
    </section>

    <section class="mt-10">

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
                @auth
                    @if(auth()->user()->role == 1)
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
                    @endif
                @endauth
            </div>
            @endforeach
        </div>

    </section>
</main>
@endsection