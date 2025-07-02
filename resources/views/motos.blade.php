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
    <section class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-7 gap-6 p-8 bg-white shadow-2xl shadow-[#0000004f] rounded-3xl">
        {{-- Ajustá los data-filtro según tus IDs reales --}}
        <a href="#" data-filtro="1" class="filtro-btn group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/deportiva.png" alt="Moto deportiva" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">DEPORTIVA</span>
        </a>
        <a href="#" data-filtro="2" class="filtro-btn group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/scooter.png" alt="Moto scooter" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">SCOOTER</span>
        </a>
        <a href="#" data-filtro="3" class="filtro-btn group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/enduro.png" alt="Moto enduro" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">ENDURO</span>
        </a>
        <a href="#" data-filtro="4" class="filtro-btn group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/chopper.png" alt="Moto chopper" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">CHOPPER</span>
        </a>
        <a href="#" data-filtro="5" class="filtro-btn group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/naked.png" alt="Moto naked" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">NAKED</span>
        </a>
        <a href="#" data-filtro="6" class="filtro-btn group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/touring.png" alt="Moto touring" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">TOURING</span>
        </a>
        <a href="#" data-filtro="todos" class="filtro-btn group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/juntas.png" alt="Todas" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">TODAS</span>
        </a>
    </section>

    {{-- Tarjetas de motos --}}
    <section class="mt-16 p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($motos as $moto)
            <div class="moto-card bg-white rounded-lg shadow-md p-4 flex flex-col justify-between shadow-[#0000004f] border border-[#00000025] hover:shadow-lg hover:shadow-[#b49d29] transition-shadow duration-300"
                 data-tipo="{{ $moto->fk_tipo_moto }}">
                <div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-2xl font-bold">{{ $moto->nombre }} ({{ $moto->anio }})</h2>
                            <p class="text-gray-900 mt-2 font-semibold">{{ $moto->descripcion }}</p>
                            <p class="text-gray-800 font-semibold mt-2">Precio: ${{ number_format($moto->precio, 2) }}</p>
                        </div>
                        <button class="rounded px-6 py-4 overflow-hidden group bg-[#ebbf30] relative hover:bg-gradient-to-r hover:from-[#ebb630] hover:to-[#ffe435f6] text-[#3c340e] hover:ring-2 hover:ring-offset-2 hover:ring-[#968832] transition-all ease-out duration-300 shadow-lg shadow-[#0000008c] mt-5">
                            <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
                            <span class="relative text-base font-semibold">Comprar</span>
                        </button>
                    </div>

                    @if ($moto->imagen)
                    <img src="{{ asset('storage/' . $moto->imagen) }}" alt="{{ $moto->nombre }}"
                         class="mt-4 w-full h-80 object-cover rounded-lg shadow-md">
                    @endif
                </div>

                @auth
                    @if(auth()->user()->role == 1)
                        <div class="flex justify-between mt-6">
                            <a href="{{ route('motos.edit', $moto->id) }}"
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

{{-- aquí hice la funcion para poder filtra las motos con JS  --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const botones = document.querySelectorAll('.filtro-btn');
        const tarjetas = document.querySelectorAll('.moto-card');

        botones.forEach(boton => {
            boton.addEventListener('click', e => {
                e.preventDefault();

                const filtro = boton.getAttribute('data-filtro');

                // Quitar cosas
                botones.forEach(b => {
                    b.classList.remove('scale-125', 'text-[#3c340e]');
                    const img = b.querySelector('img');
                    if (img) img.classList.remove('opacity-100');
                    if (img) img.classList.add('opacity-50');
                });

                // Agregar cosas
                boton.classList.add('scale-125', 'text-[#b49d29]');
                const imgActiva = boton.querySelector('img');
                if (imgActiva) imgActiva.classList.remove('opacity-50');
                if (imgActiva) imgActiva.classList.remove('shadow-lg');
                if (imgActiva) imgActiva.classList.add('opacity-100');

                // Filtrado de tarjetas
                tarjetas.forEach(tarjeta => {
                    const tipo = tarjeta.getAttribute('data-tipo');
                    if (filtro === 'todos' || tipo === filtro) {
                        tarjeta.classList.remove('hidden');
                    } else {
                        tarjeta.classList.add('hidden');
                    }
                });
            });
        });
    });
</script>
@endsection
