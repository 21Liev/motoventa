@extends('layouts.app')

@section('content')
@if(Auth::check())
    <div class="text-center mt-8 text-xl text-slate-700 font-semibold">
        ¡Bienvenido, {{ Auth::user()->email }}!
    </div>
@endif

{{-- imagen de el inicio, queda aca --}}
<div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible mt-10">
  <img
    class="object-cover object-[center_-50px] w-full rounded-lg shadow-xl h-96 shadow-blue-gray-900/50"
    src="https://media.istockphoto.com/id/2095561661/photo/yellow-and-black-sports-motorcycle-on-a-yellow-background.jpg?s=2048x2048&w=is&k=20&c=A3m61ejfm3gk839Vz8P7IhFntJ9Kzf_T6GDbF0pw0hE="
    alt="Moto deportiva" />
</div>



{{-- primer titulo --}}
<div class="mt-10">
  <h1 class="text-2xl font-bold mb-4 text-center mt-32">NUESTROS MODELOS</h1>
</div>

{{-- botones de los modelos --}}
<section class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 p-8 bg-white shadow-md mt-16">
  <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
    <img src="/img/deportiva.png" alt="Moto deportiva" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
    <span class="mt-2 text-sm font-bold text-slate-600 group-hover:text-yellow-600 transition-colors">DEPORTIVA</span>
  </a>

  <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
    <img src="/img/scooter.png" alt="Moto scooter" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
    <span class="mt-2 text-sm font-bold text-slate-600 group-hover:text-yellow-600 transition-colors">SCOOTER</span>
  </a>

  <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
    <img src="/img/enduro.png" alt="Moto enduro" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
    <span class="mt-2 text-sm font-bold text-slate-600 group-hover:text-yellow-600 transition-colors">ENDURO</span>
  </a>

  <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
    <img src="/img/chopper.png" alt="Moto chopper" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
    <span class="mt-2 text-sm font-bold text-slate-600 group-hover:text-yellow-600 transition-colors">CHOPPER</span>
  </a>

  <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
    <img src="/img/naked.png" alt="Moto naked" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
    <span class="mt-2 text-sm font-bold text-slate-600 group-hover:text-yellow-600 transition-colors">NAKED</span>
  </a>

  <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
    <img src="/img/touring.png" alt="Moto touring" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
    <span class="mt-2 text-sm font-bold text-slate-600 group-hover:text-yellow-600 transition-colors">TOURING</span>
  </a>
</section>

{{-- Contacto --}}
<section class="bg-white mt-24 px-6 py-12 shadow-xl rounded-2xl max-w-4xl mx-auto">
  <h2 class="text-3xl font-bold text-center text-slate-800 mb-8">Contáctanos</h2>
  <form action="#" method="POST" class="space-y-6">
    @csrf

    <div>
      <label for="nombre" class="block text-sm font-semibold text-slate-700 mb-1">Nombre</label>
      <input type="text" id="nombre" name="nombre" required
        class="w-full p-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition duration-300" />
    </div>

    <div>
      <label for="email" class="block text-sm font-semibold text-slate-700 mb-1">Correo Electrónico</label>
      <input type="email" id="email" name="email" required
        class="w-full p-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition duration-300" />
    </div>

    <div>
      <label for="email" class="block text-sm font-semibold text-slate-700 mb-1">Telefono</label>
      <input type="tel" id="telefono" name="telefono" required
        class="w-full p-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition duration-300" />
    </div>

    <div>
      <label for="mensaje" class="block text-sm font-semibold text-slate-700 mb-1">Mensaje</label>
      <textarea id="mensaje" name="mensaje" rows="4" required
        class="w-full p-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition duration-300"></textarea>
    </div>

    <div class="text-center">
      <button type="submit"
        class="bg-[#ffde3a] hover:bg-yellow-400 text-slate-800 font-bold py-3 px-8 rounded-xl shadow-md transition duration-300">
        Enviar Mensaje
      </button>
    </div>
  </form>
</section>

@endsection