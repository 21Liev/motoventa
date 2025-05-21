@extends('layouts.app')

@section('content')
<main>
    {{-- titulo --}}
    <div>
        <h2 class="text-7xl text-center mb-12 font-extrabold font-archivo text-[#87761f] mt-32">
            SUCURSALES
        </h2>
        <p class="font-roboto font-medium text-[#3c340e] text-center text-xl pb-12 max-w-2xl mx-auto">
            Si necesitas atención personalizada, no dudes en visitarnos, contamos con asesoramiento admistrativo y técnico en nuestros talleres
            para tus motos.
        </p>
    </div>
        {{-- separacion --}}
    <div class="w-9/12 h-1 bg-[#f5c730] my-24 rounded-xl mx-auto"></div>
    {{-- Palermo contacto --}}
        <section class="grid grid-cols-1 md:grid-cols-2 items-center p-6 mt-20 gap-4 md:gap-6">
            <div class="w-full h-full self-center p-12">
                <img class="rounded-lg w-full h-full max-h-[600px] object-cover shadow-xl shadow-[#0000009a]"
                    src="https://images.unsplash.com/photo-1676246908315-d6f65223eba4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="foto de taller">
            </div>
            <div class="space-y-4 flex flex-col items-center justify-center border-2 border-[#87761f59] rounded-xl shadow-xl shadow-[#0000005e] p-10">
                <h2 class="text-7xl text-center mb-8 font-extrabold font-archivo text-[#87761f] mt-10">
                    CABA
                </h2>
                    <ul class="space-y-4 text-[#3c340e] text-xl font-roboto font-semibold text-left">
                        <li class="flex items-cente gap-4">
                            <img src="https://img.icons8.com/ios-filled/50/ebbf30/marker.png" alt="Ubicación" class="w-6 h-6">
                            Av. Santa Fe 1234, Palermo, CABA
                        </li>
                        <li class="flex items-cente gap-4">
                            <img src="https://img.icons8.com/ios-filled/50/ebbf30/phone.png" alt="Teléfono" class="w-6 h-6">
                            +54 11 2345-6789
                        </li>
                        <li class="flex items-cente gap-4">
                            <img src="https://img.icons8.com/ios-filled/50/ebbf30/whatsapp.png" alt="WhatsApp" class="w-6 h-6">
                            +54 9 11 9876-5432
                        </li>
                        <li class="flex items-cente gap-4">
                            <img src="https://img.icons8.com/ios-filled/50/ebbf30/new-post.png" alt="Email" class="w-6 h-6">
                            contacto@palermomotos.com
                        </li>
                    </ul>
                <div class="pt-9">
                <button
                    class="rounded px-14 py-4 overflow-hidden group bg-[#ebbf30] relative hover:bg-gradient-to-r hover:from-[#ebb630] hover:to-[#ffe435f6] text-[#3c340e] hover:ring-2 hover:ring-offset-2 hover:ring-[#968832] transition-all ease-out duration-300 shadow-lg shadow-[#0000008c]">
                    <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
                    <span class="relative text-base font-semibold">Contactanos</span>
                </button>
                </div>
                <div class="p-5">
                    <img src="https://img.icons8.com/?size=100&id=26140&format=png&color=ebbf30"
                        alt="flecha"
                        class="w-8 h-8 animate-bounce [animation-duration:2s]">
                </div>
            </div>
        </section>
    {{-- Rosario contacto --}}
        <section class="grid grid-cols-1 md:grid-cols-2 items-center p-6 mt-20 gap-4 md:gap-6">
            <div class="w-full h-full self-center p-12">
                <img class="rounded-lg w-full h-full max-h-[600px] object-cover shadow-xl shadow-[#0000009a]"
                    src="https://images.unsplash.com/photo-1706062202423-e6655d342741?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="foto de taller">
            </div>
            <div class="space-y-4 flex flex-col items-center justify-center border-2 border-[#87761f59] rounded-xl shadow-xl shadow-[#0000005e] p-10">
                <h2 class="text-7xl text-center mb-8 font-extrabold font-archivo text-[#87761f] mt-10">
                    ROSARIO
                </h2>
                    <ul class="space-y-4 text-[#3c340e] text-xl font-roboto font-semibold text-left">
                        <li class="flex items-cente gap-4">
                            <img src="https://img.icons8.com/ios-filled/50/ebbf30/marker.png" alt="Ubicación" class="w-6 h-6">
                            Bv. Oroño 456, Rosario
                        </li>
                        <li class="flex items-cente gap-4">
                            <img src="https://img.icons8.com/ios-filled/50/ebbf30/phone.png" alt="Teléfono" class="w-6 h-6">
                            +54 11 2345-6789
                        </li>
                        <li class="flex items-cente gap-4">
                            <img src="https://img.icons8.com/ios-filled/50/ebbf30/whatsapp.png" alt="WhatsApp" class="w-6 h-6">
                            +54 9 11 9876-5432
                        </li>
                        <li class="flex items-cente gap-4">
                            <img src="https://img.icons8.com/ios-filled/50/ebbf30/new-post.png" alt="Email" class="w-6 h-6">
                            contacto@rosariomotos.com
                        </li>
                    </ul>
                <div class="pt-9">
                <button
                    class="rounded px-14 py-4 overflow-hidden group bg-[#ebbf30] relative hover:bg-gradient-to-r hover:from-[#ebb630] hover:to-[#ffe435f6] text-[#3c340e] hover:ring-2 hover:ring-offset-2 hover:ring-[#968832] transition-all ease-out duration-300 shadow-lg shadow-[#0000008c]">
                    <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
                    <span class="relative text-base font-semibold">Contactanos</span>
                </button>
                </div>
                <div class="p-5">
                    <img src="https://img.icons8.com/?size=100&id=26140&format=png&color=ebbf30"
                        alt="flecha"
                        class="w-8 h-8 animate-bounce [animation-duration:2s]">
                </div>
            </div>
        </section>
    {{-- Cordoba contacto --}}
        <section class="grid grid-cols-1 md:grid-cols-2 items-center p-6 mt-20 gap-4 md:gap-6">
            <div class="w-full h-full self-center p-12">
                <img class="rounded-lg w-full h-full max-h-[600px] object-cover shadow-xl shadow-[#0000009a]"
                    src="https://images.unsplash.com/photo-1676247158228-77f0c62ceb9a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="foto de taller">
            </div>
            <div class="space-y-4 flex flex-col items-center justify-center border-2 border-[#87761f59] rounded-xl shadow-xl shadow-[#0000005e] p-10">
                <h2 class="text-7xl text-center mb-8 font-extrabold font-archivo text-[#87761f] mt-10">
                    CÓRDOBA
                </h2>
                    <ul class="space-y-4 text-[#3c340e] text-xl font-roboto font-semibold text-left">
                        <li class="flex items-cente gap-4">
                            <img src="https://img.icons8.com/ios-filled/50/ebbf30/marker.png" alt="Ubicación" class="w-6 h-6">
                            Av. Colón 789, Córdoba
                        </li>
                        <li class="flex items-cente gap-4">
                            <img src="https://img.icons8.com/ios-filled/50/ebbf30/phone.png" alt="Teléfono" class="w-6 h-6">
                            (0351) 321-6543
                        </li>
                        <li class="flex items-cente gap-4">
                            <img src="https://img.icons8.com/ios-filled/50/ebbf30/whatsapp.png" alt="WhatsApp" class="w-6 h-6">
                            +54 9 11 9876-5432
                        </li>
                        <li class="flex items-cente gap-4">
                            <img src="https://img.icons8.com/ios-filled/50/ebbf30/new-post.png" alt="Email" class="w-6 h-6">
                            contacto@cordobamotos.com
                        </li>
                    </ul>
                <div class="pt-9">
                <button
                    class="rounded px-14 py-4 overflow-hidden group bg-[#ebbf30] relative hover:bg-gradient-to-r hover:from-[#ebb630] hover:to-[#ffe435f6] text-[#3c340e] hover:ring-2 hover:ring-offset-2 hover:ring-[#968832] transition-all ease-out duration-300 shadow-lg shadow-[#0000008c]">
                    <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
                    <span class="relative text-base font-semibold">Contactanos</span>
                </button>
                </div>
                <div class="p-5">
                    <img src="https://img.icons8.com/?size=100&id=26140&format=png&color=ebbf30"
                        alt="flecha"
                        class="w-8 h-8 animate-bounce [animation-duration:2s]">
                </div>
            </div>
        </section>
    </main>
@endsection
