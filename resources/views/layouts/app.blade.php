<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Lobster&family=Roboto&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite('resources/css/app.css')

</head>

<body>
    <header>
        {{-- nav --}}
        <nav class="block w-screen h-36 px-4 py-2 bg-[#E5CA17] shadow-xl rounded-b-2xl lg:px-8 lg:py-3">
            <div class="container flex flex-wrap items-center justify-between h-full font-bold">

                <a href="{{ route('inicio') }}" class="mr-4 block cursor-pointer py-1.5 text-base text-slate-800 font-semibold ml-16 hover:scale-110 transition-all duration-500">
                    <img src="/img/logo.png" alt="Logo de AL Motor" width="130" />
                </a>

                <div class="hidden lg:block">
                    <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                        <li class="flex items-center p-3 text-sm gap-x-2 text-slate-800 hover:scale-125 hover:bg-[#ffe786] rounded-lg transition-all duration-500 hover:shadow-md">
                            <img src="https://img.icons8.com/?size=28&id=6KVNHRjkdN6l&format=png&color=292929" alt="">
                            <a href="{{ route('motos.index') }}" class="flex items-center">
                                CATALOGO
                            </a>
                        </li>

                        <li class="flex items-center p-3 text-sm gap-x-2 text-slate-800 hover:scale-125 hover:bg-[#ffe786] rounded-lg transition-all duration-500 hover:shadow-md">
                            <img src="https://img.icons8.com/?size=23&id=105453&format=png&color=292929" alt="">
                            <a href="{{ route('equipo') }}" class="flex items-center">
                                EQUIPO
                            </a>
                        </li>
                        <li class="flex items-center p-3 text-sm gap-x-2 text-slate-800 hover:scale-125 hover:bg-[#ffe786] rounded-lg transition-all duration-500 hover:shadow-md">
                            <img src="https://img.icons8.com/?size=24&id=61342&format=png&color=292929" alt="">
                            <a href="{{ route('sucursales') }}" class="flex items-center">
                                SUCURSALES
                            </a>
                        </li>
                        @auth
                        <li class="flex items-center p-3 text-sm gap-x-2 text-slate-800 hover:scale-125 hover:bg-[#ffe786] rounded-lg transition-all duration-500 hover:shadow-md">
                            <img src="https://img.icons8.com/ios-filled/32/000000/motorcycle.png" alt="">
                            <a href="{{ route('create') }}" class="flex items-center">
                                AGREGAR MOTO
                            </a>
                        </li>
                        @endauth
                        @guest
                        <li
                            class="flex items-center p-3 text-sm gap-x-2 text-slate-800 hover:scale-125 hover:bg-[#ffe786] rounded-lg transition-all duration-500 hover:shadow-md">
                            <img src="https://img.icons8.com/?size=23&id=QUnLakqCvUtp&format=png&color=292929" alt="">
                            <a href="{{ route('login') }}" class="flex items-center">
                                INICIAR SESIÓN
                            </a>
                        </li>
                        @endguest
                        @auth
                        <li class="flex items-center p-3 text-sm gap-x-2 text-slate-800 hover:scale-125 hover:bg-[#ffe786] rounded-lg transition-all duration-500 hover:shadow-md">
                            <img src="https://img.icons8.com/?size=23&id=QUnLakqCvUtp&format=png&color=292929" alt="">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="flex items-center">
                                    CERRAR SESIÓN
                                </button>
                            </form>
                        </li>
                        @endauth

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
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="bg-[#E5CA17] text-slate-800 py-6 mt-20 shadow-inner rounded-t-2xl">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-sm font-semibold">&copy; {{ date('Y') }} AL Motor - sin derechos reservados pa</p>
            <div class="mt-2 flex justify-center gap-6 text-sm">
                <a href="#" class="hover:text-yellow-600 transition">Términos y Condiciones</a>
                <a href="#" class="hover:text-yellow-600 transition">Privacidad</a>
                <a href="#" class="hover:text-yellow-600 transition">Contacto</a>
            </div>
        </div>
    </footer>
</body>

</html>
