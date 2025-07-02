@extends('layouts.app')

@section('content')
@if ($errors->any())
<div class="text-red-600 text-xl text-center font-semibold font-roboto">
    El usuario o la contraseña no coinciden.
</div>
@endif
@if ($errors->any())
    <ul class="text-red-600 text-sm mb-4">
        @foreach ($errors->all() as $error)
            <li>• {{ $error }}</li>
        @endforeach
    </ul>
@endif

<div class="flex justify-center items-center min-h-[80vh] px-2 font-roboto">
    <div class="p-6 rounded-xl shadow-2xl shadow-[#00000048] w-full max-w-sm bg-[#E5CA17]">
        <h1 class="text-2xl font-bold text-center text-slate-800 mb-11 mt-7">Iniciar Sesión</h1>
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-large font-semibold text-slate-700">Correo Electrónico</label>
                <input type="email" name="email" id="email" required
                    class="w-full mt-1 p-2.5 rounded-lg border border-gray-300 focus:ring-yellow-400 focus:border-yellow-400 transition duration-200" />
            </div>

            <div>
                <label for="password" class="block text-large font-semibold text-slate-700">Contraseña</label>
                <input type="password" name="password" id="password" required
                    class="w-full mt-1 p-2.5 rounded-lg border border-gray-300 focus:ring-yellow-400 focus:border-yellow-400 transition duration-200" />
            </div>
            <button type="submit"
                class="w-full hover:bg-yellow-400 font-semibold py-2.5 px-6 overflow-hidden group bg-[#ffe17d] relative hover:bg-gradient-to-r hover:from-[#ffe17d] hover:to-[#b8a422f6] text-[#3c340e] hover:ring-2 hover:ring-offset-2 hover:ring-[#968832] transition-all ease-out duration-300 shadow-lg shadow-[#0000004b] rounded-md">
                <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-20 rotate-12 group-hover:-translate-x-40 ease"></span>
                <span class="relative text-base font-semibold">Iniciar sesión</span>
            </button>
            <div>
                <p class="block text-large font-semibold text-slate-700 text-center mb-5 mt-7">¿No tienes cuenta?</p>
                <a href="{{ route('registro') }}"
                    class="block text-center w-full hover:bg-yellow-400 font-semibold py-2.5 px-6 overflow-hidden group bg-[#ffe17d] relative hover:bg-gradient-to-r hover:from-[#ffe17d] hover:to-[#b8a422f6] text-[#3c340e] hover:ring-2 hover:ring-offset-2 hover:ring-[#968832] transition-all ease-out duration-300 shadow-lg shadow-[#0000004b] rounded-md">
                    <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-20 rotate-12 group-hover:-translate-x-40 ease"></span>
                    <span class="relative text-base font-semibold">REGISTRARSE</span>
                </a>

            </div>
        </form>
    </div>
</div>
@endsection
