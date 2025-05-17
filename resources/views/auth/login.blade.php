@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="mb-4 text-red-600 text-sm text-center font-semibold">
        El usuario o la contraseña no coinciden.
    </div>
@endif

<div class="flex justify-center items-center min-h-[80vh] bg-gray-100 px-2">
    <div class="bg-white p-6 rounded-xl shadow-md w-full max-w-sm">
        <h1 class="text-2xl font-bold text-center text-slate-800 mb-4">Iniciar Sesión</h1>
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-slate-700">Correo Electrónico</label>
                <input type="email" name="email" id="email" required
                    class="w-full mt-1 p-2.5 rounded-lg border border-gray-300 focus:ring-yellow-400 focus:border-yellow-400 transition duration-200" />
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-slate-700">Contraseña</label>
                <input type="password" name="password" id="password" required
                    class="w-full mt-1 p-2.5 rounded-lg border border-gray-300 focus:ring-yellow-400 focus:border-yellow-400 transition duration-200" />
            </div>

            <button type="submit"
                class="w-full bg-[#ffde3a] hover:bg-yellow-400 text-slate-800 font-semibold py-2.5 rounded-lg shadow-sm transition duration-200">
                Iniciar Sesión
            </button>
        </form>
    </div>
</div>
@endsection
