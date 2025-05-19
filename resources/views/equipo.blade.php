@extends('layouts.app')

@section('content')
    {{-- Titulo --}}
    <div>
        <h2 class="text-4xl text-center mb-12 font-extrabold font-archivo text-[#87761f] mt-20">
            NUESTRO EQUIPO
        </h2>
    </div>
{{-- Botones de las motos --}}
 <section class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 p-8 bg-white shadow-2xl shadow-[#0000004f] rounded-3xl">
    <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
        <img src="/img/casco.png" alt="Moto deportiva" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
        <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">CASCOS</span>
    </a>
    <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
        <img src="/img/guantes.png" alt="Moto scooter" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
        <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">GUANTES</span>
    </a>

    <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
        <img src="/img/camperas.png" alt="Moto enduro" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
        <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">CAMPERAS</span>
    </a>

    <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
        <img src="/img/pantalones.png" alt="Moto chopper" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
        <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">PANTALONES</span>
    </a>

    <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
        <img src="/img/botas.png" alt="Moto naked" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
        <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">BOTAS</span>
    </a>

    <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
        <img src="/img/acc.png" alt="Moto touring" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
        <span class="mt-2 text-sm font-bold text-[#3c340e] group-hover:text-[#b49d29] transition-colors">ACCESORIOS</span>
    </a>
    </section>



@endsection
