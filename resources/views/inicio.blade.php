<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#ebebeb] overflow-x-hidden">

    {{-- nav --}}
    <nav class="block w-screen h-36 px-4 py-2 bg-[#ffde3a] shadow-xl rounded-b-2xl lg:px-8 lg:py-3">
        <div class="container flex flex-wrap items-center justify-between h-full font-bold">

          <a href="#" class="mr-4 block cursor-pointer py-1.5 text-base text-slate-800 font-semibold ml-16 hover:scale-110 transition-all duration-500">
            <img src="/img/logo.png" alt="Logo de AL Motor" width="130"/>
          </a>

          <div class="hidden lg:block">
            <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
              <li class="flex items-center p-3 text-sm gap-x-2 text-slate-800 hover:scale-125 hover:bg-[#ffe786] rounded-lg transition-all duration-500 hover:shadow-md">
                <img src="https://img.icons8.com/?size=28&id=6KVNHRjkdN6l&format=png&color=292929" alt="">
                <a href="#" class="flex items-center">
                   CATALOGO
                </a>
              </li>

              <li class="flex items-center p-3 text-sm gap-x-2 text-slate-800 hover:scale-125 hover:bg-[#ffe786] rounded-lg transition-all duration-500 hover:shadow-md">
                <img src="https://img.icons8.com/?size=23&id=105453&format=png&color=292929" alt="">
                <a href="#" class="flex items-center">
                  EQUIPO
                </a>
              </li>
              <li class="flex items-center p-3 text-sm gap-x-2 text-slate-800 hover:scale-125 hover:bg-[#ffe786] rounded-lg transition-all duration-500 hover:shadow-md">
                <img src="https://img.icons8.com/?size=24&id=61342&format=png&color=292929" alt="">
                <a href="#" class="flex items-center">
                  SUCURSALES
                </a>
              </li>
              <li
              class="flex items-center p-3 text-sm gap-x-2 text-slate-800 hover:scale-125 hover:bg-[#ffe786] rounded-lg transition-all duration-500 hover:shadow-md">
              <img src="https://img.icons8.com/?size=23&id=QUnLakqCvUtp&format=png&color=292929" alt="">
                <a href="#" class="flex items-center">
                    INICIAR SESIÓN
                </a>
              </li>
            </ul>
          </div>
          <button class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden" type="button">
            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </span>
          </button>
        </div>
      </nav>

    {{-- imagen de el inicio --}}
    <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
        <img
            class="object-cover object-center w-full rounded-lg shadow-xl h-96 shadow-blue-gray-900/50"
            src="https://images.unsplash.com/photo-1682407186023-12c70a4a35e0?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2832&amp;q=80"
            alt="nature image"
        />
    </div>

    {{-- primer titulo --}}
    <div class="mt-10">
        <h1 class="text-2xl font-bold mb-4 text-center mt-32">NUESTROS MODELOS</h1>
    </div>

    {{-- totones de los modelos --}}
    <section class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 p-8 bg-white shadow-md mt-16">
        <!-- Modelo: Deportiva -->
        <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
          <img src="/img/deportiva.png" alt="Moto deportiva" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
          <span class="mt-2 text-sm font-bold text-slate-600 group-hover:text-yellow-600 transition-colors">DEPORTIVA</span>
        </a>
        <!-- Modelo: Scooter -->
        <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
          <img src="/img/scooter.png" alt="Moto deportiva" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
          <span class="mt-2 text-sm font-bold text-slate-600 group-hover:text-yellow-600 transition-colors">SCOOTER</span>
        </a>

        <!-- Modelo: Enduro -->
        <a href=#" class="group flex flex-col items-center ttransition-all duration-300 transform hover:scale-105">
          <img src="/img/enduro.png" alt="Moto deportiva" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
          <span class="mt-2 text-sm font-bold text-slate-600 group-hover:text-yellow-600 transition-colors">ENDURO</span>
        </a>

        <!-- Modelo: Chopper -->
        <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
          <img src="/img/chopper.png" alt="Moto deportiva" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
          <span class="mt-2 text-sm font-bold text-slate-600 group-hover:text-yellow-600 transition-colors">CHOPPER</span>
        </a>

        <!-- Modelo: Naked -->
        <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
            <img src="/img/naked.png" alt="Moto deportiva" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
            <span class="mt-2 text-sm font-bold text-slate-600 group-hover:text-yellow-600 transition-colors">NAKED</span>
          </a>

        <!-- Modelo: Touring -->
        <a href="#" class="group flex flex-col items-center transition-all duration-300 transform hover:scale-105">
          <img src="/img/touring.png" alt="Moto deportiva" class="opacity-50 w-1200 h-800 object-contain transition-all duration-500 group-hover:opacity-100 group-hover:drop-shadow-lg">
          <span class="mt-2 text-sm font-bold text-slate-600 group-hover:text-yellow-600 transition-colors">TOURING</span>
        </a>
      </section>


    <div class="flex justify-center items-center min-h-screen">
        <div class="text-center p-6 bg-white rounded-lg shadow-md w-1/2">
            <div class="space-y-4">
                <a href="{{ route('motos.index') }}" class="text-white bg-blue-500 hover:bg-blue-600 px-6 py-3 rounded-full shadow-md transition duration-300">Ver Motos</a>
                <a href="{{ route('login') }}" class="text-white bg-green-500 hover:bg-green-600 px-6 py-3 rounded-full shadow-md transition duration-300">Iniciar Sesión</a>
            </div>
        </div>
    </div>
</body>
</html>


