@extends('layouts.app')

@section('content')
@if(Auth::check())
<div class="text-center mt-8 text-2xl text-slate-700 font-extrabold font-archivo">
    Vista de administrador
</div>
<div class="text-center mt-8 text-2xl text-slate-700 font-extrabold font-roboto">
    ¡Bienvenido, {{ Auth::user()->email }}!
</div>
@endif
<main>
    {{-- seccion del baner --}}
    <section>
        {{-- imagen de el inicio, queda aca --}}
        <div class="relative grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible mt-10">
            {{-- imagen y texto con logo --}}
            <div class="absolute top-15 left-44 z-10 flex flex-col items-start text-[#000000b6]">
                <img src="/img/logo.png" alt="logo" class="w-60 h-60" />
                <p class="text-2xl font-black italic">LÍDERES EN VENTA DEL PAÍS</p>
            </div>
            {{-- img --}}
            <img
                class="object-cover object-[center_-50px] w-full rounded-lg shadow-xl h-96 shadow-[#0000005d]"
                src="https://media.istockphoto.com/id/2095561661/photo/yellow-and-black-sports-motorcycle-on-a-yellow-background.jpg?s=2048x2048&w=is&k=20&c=A3m61ejfm3gk839Vz8P7IhFntJ9Kzf_T6GDbF0pw0hE="
                alt="Moto deportiva" />
        </div>
    </section>
    {{-- botones de los modelos --}}
    <section class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 p-8 bg-white shadow-2xl shadow-[#0000004f] rounded-3xl mt-16">
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
    {{-- seccion con fotos de las motos --}}
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start p-6 mt-20">
        {{-- texto y botons izquierda --}}
        <div class="space-y-4 flex flex-col items-center justify-center">
            <h2 class="text-7xl text-center mb-12 font-extrabold font-archivo text-[#87761f] mt-20">
                NUESTRAS MOTOS
            </h2>
            <p class="font-roboto font-medium text-[#3c340e] text-center text-xl pb-12 max-w-2xl mx-auto">
                Elegí entre nuestros modelos más destacados: deportivos,
                urbanos, touring y mucho más. Contamos con motos de alta calidad,
                pensadas para cada estilo de vida. Ya sea que busques velocidad, comodidad o
                rendimiento diario, tenemos la opción ideal para vos. Descubrí la libertad de
                moverte con estilo y potencia.
            </p>
            <button
                class="rounded px-6 py-4 overflow-hidden group bg-[#ebbf30] relative hover:bg-gradient-to-r hover:from-[#ebb630] hover:to-[#ffe435f6] text-[#3c340e] hover:ring-2 hover:ring-offset-2 hover:ring-[#968832] transition-all ease-out duration-300 shadow-lg shadow-[#0000008c]">
                <span
                    class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
                <span class="relative text-base font-semibold">Nuestro catalogo</span>
            </button>
            <div class="p-5">
                <img src="https://img.icons8.com/?size=100&id=26140&format=png&color=ebbf30" alt="flecha" class="w-8 h-8 animate-bounce duration-75">
            </div>
        </div>
        {{-- imgs --}}
        <div class="grid grid-cols-2 gap-4">
            <img class="rounded-lg transition-all duration-500 h-48 hover:h-52 w-full object-cover shadow-xl shadow-[#0000009a]" src="https://images.unsplash.com/photo-1609630875171-b1321377ee65?q=80&w=1960&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="foto de moto1">
            <img class="rounded-lg h-40 hover:h-44 transition-all duration-500 mt-6 w-full object-cover shadow-xl shadow-[#0000009a]" src="https://images.unsplash.com/photo-1508431432310-7fec11a74c59?q=80&w=1925&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="foto de moto2">
            <img class="rounded-lg h-40 hover:h-44 transition-all duration-500 mt-6 w-full object-cover shadow-xl shadow-[#0000009a]" src="https://images.unsplash.com/photo-1722245057881-ee307e4168b3?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="foto de moto3">
            <img class="rounded-lg transition-all duration-500 h-48 hover:h-52 w-full object-cover shadow-xl shadow-[#0000009a]" src="https://images.unsplash.com/photo-1747227231297-829a32781f65?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="foto de moto4">
            <img class="rounded-lg transition-all duration-500 h-48 hover:h-52 w-full object-cover shadow-xl shadow-[#0000009a]" src="https://images.unsplash.com/photo-1667136916803-8d4ab3d6eb15?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="foto de moto5">
            <img class="rounded-lg h-40 hover:h-44 transition-all duration-500 mt-6 w-full object-cover shadow-xl shadow-[#0000009a]" src="https://images.unsplash.com/photo-1654085888334-bc4b03bcbf10?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="foto de moto6">
        </div>
    </section>
    {{-- separacion --}}
    <div class="w-9/12 h-1 bg-[#f5c730] my-40 rounded-xl mx-auto"></div>
    {{-- seccion con el equipo --}}
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start p-6 mt-20">
        {{-- Imágenes a la izquierda en vertical --}}
        <div class="grid grid-cols-2 gap-4">
            <img class="rounded-lg transition-all duration-500 h-48 hover:h-52 w-full object-cover shadow-xl shadow-[#0000009a]" src="https://images.unsplash.com/photo-1611004060674-7e8864bcb4e4?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="foto de moto1">
            <img class="rounded-lg h-40 hover:h-44 transition-all duration-500 mt-6 w-full object-cover shadow-xl shadow-[#0000009a]" src="https://images.unsplash.com/photo-1542018751212-595220ec6db7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="foto de moto2">
            <img class="rounded-lg h-40 hover:h-44 transition-all duration-500 mt-6 w-full object-cover shadow-xl shadow-[#0000009a]" src="https://plus.unsplash.com/premium_photo-1697968232204-24b2a4616710?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="foto de moto3">
            <img class="rounded-lg transition-all duration-500 h-48 hover:h-52 w-full object-cover shadow-xl shadow-[#0000009a]" src="https://images.unsplash.com/photo-1677414456284-e79eef5992ef?q=80&w=2075&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="foto de moto4">
            <img class="rounded-lg transition-all duration-500 h-48 hover:h-52 w-full object-cover shadow-xl shadow-[#0000009a]" src="https://images.unsplash.com/photo-1558899447-76e97dc5a3c1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="foto de moto5">
            <img class="rounded-lg h-40 hover:h-44 transition-all duration-500 mt-6 w-full object-cover shadow-xl shadow-[#0000009a]" src="https://plus.unsplash.com/premium_photo-1744395627361-7d8323c95cfc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="foto de moto6">
        </div>
        {{-- Texto a la derecha --}}
        <div class="space-y-4 flex flex-col items-center justify-center">
            <h2 class="text-7xl text-center mb-12 font-extrabold font-archivo text-[#87761f] mt-20">
                EQUIPO PARA TI
            </h2>
            <p class="font-roboto font-medium text-[#3c340e] text-center text-xl pb-12 max-w-2xl mx-auto">
                En nuestra tienda, sabemos que cada motociclista tiene sus necesidades y preferencias únicas.
                Por eso, ofrecemos una amplia variedad de equipos y accesorios
                para que puedas personalizar tu moto según tu estilo y comodidad.
            </p>
            <button
                class="rounded px-6 py-4 overflow-hidden group bg-[#ebbf30] relative hover:bg-gradient-to-r hover:from-[#ebb630] hover:to-[#ffe435f6] text-[#3c340e] hover:ring-2 hover:ring-offset-2 hover:ring-[#968832] transition-all ease-out duration-300 shadow-lg shadow-[#0000008c]">
                <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
                <span class="relative text-base font-semibold">Nuestro equipo</span>
            </button>
            <div class="p-5">
                <img src="https://img.icons8.com/?size=100&id=26140&format=png&color=ebbf30" alt="flecha" class="w-8 h-8 animate-bounce [animation-duration:2s]">
            </div>
        </div>
    </section>
    <div class="w-9/12 h-1 bg-[#f5c730] my-40 rounded-xl mx-auto"></div>
    {{-- Contacto --}}
    <section>
        <div>
            <h2 class="text-5xl text-center mb-12 font-extrabold font-archivo text-[#87761f]">
                CONTACTANOS
            </h2>
            <p class="font-roboto font-medium text-[#3c340e] text-center text-xl pb-12 max-w-2xl mx-auto">
                Dejanos un mensaje con tus dudas y un asesor se pondra en contacto contigo.
            </p>
        </div>



        {{-- Formulario de contacto --}}
        <form action="#" method="POST" class="space-y-6 bg-[#E5CA17] mt-10 px-6 py-12 shadow-xl rounded-2xl w-1/3 mx-auto font-roboto shadow-[#00000062]">
            {{-- Mensaje de exito --}}
            {{-- CSRF token para la seguridad del formulario --}}
            @csrf
            <div>
                <label for="nombre" class="block text-lg font-semibold text-[#3c340e] mb-1">Nombre</label>
                <input type="text" id="nombre" name="nombre" required
                    class="w-full p-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#3c340e] focus:border-[#3c340e] transition duration-300" />
            </div>

            <div>
                <label for="email" class="block text-lg font-semibold text-[#3c340e] mb-1">Correo Electrónico</label>
                <input type="email" id="email" name="email" required
                    class="w-full p-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#3c340e] focus:border-[#3c340e] transition duration-300" />
            </div>

            <div>
                <label for="email" class="block text-lg font-semibold text-[#3c340e] mb-1">Telefono</label>
                <input type="tel" id="telefono" name="telefono" required
                    class="w-full p-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#3c340e] focus:border-[#3c340e] transition duration-300" />
            </div>

            <div>
                <label for="mensaje" class="block text-lg font-semibold text-[#3c340e] mb-1">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="4" required
                    class="w-full p-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#3c340e] focus:border-[#3c340e] transition duration-300"></textarea>
            </div>

            <div class="text-center">
                <button
                    class="rounded px-6 py-4 overflow-hidden group bg-[#ffe17d] relative hover:bg-gradient-to-r hover:from-[#ffe17d] hover:to-[#b8a422f6] text-[#3c340e] hover:ring-2 hover:ring-offset-2 hover:ring-[#968832] transition-all ease-out duration-300 shadow-lg shadow-[#0000004b]">
                    <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-20 rotate-12 group-hover:-translate-x-40 ease"></span>
                    <span class="relative text-base font-semibold">Enviar mensaje</span>
                </button>
            </div>
        </form>
    </section>
</main>
@endsection