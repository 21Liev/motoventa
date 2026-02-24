@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto px-4">
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Mi perfil</h1>

    @if (session('status'))
        <div class="mb-4 p-3 rounded-lg bg-green-100 text-green-800 font-semibold">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-4 p-3 rounded-lg bg-red-100 text-red-800">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li class="text-sm">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}" class="bg-white shadow-lg rounded-2xl p-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold text-slate-700 mb-1">Nombre</label>
            <input
                type="text"
                name="name"
                value="{{ old('name', $user->name) }}"
                class="w-full border rounded-lg px-3 py-2"
                required
            />
        </div>

        <div class="mb-4">
            <label class="block font-semibold text-slate-700 mb-1">Email</label>
            <input
                type="email"
                name="email"
                value="{{ old('email', $user->email) }}"
                class="w-full border rounded-lg px-3 py-2"
                required
            />
        </div>

        <div class="mt-6 mb-2">
            <p class="text-sm text-slate-600">
                Si no querés cambiar la contraseña, dejá estos campos vacíos.
            </p>
        </div>

        <div class="mb-4">
            <label class="block font-semibold text-slate-700 mb-1">Nueva contraseña</label>
            <input
                type="password"
                name="password"
                class="w-full border rounded-lg px-3 py-2"
            />
        </div>

        <div class="mb-6">
            <label class="block font-semibold text-slate-700 mb-1">Confirmar contraseña</label>
            <input
                type="password"
                name="password_confirmation"
                class="w-full border rounded-lg px-3 py-2"
            />
        </div>

        <button
            type="submit"
            class="w-full bg-[#E5CA17] hover:bg-[#ffe786] text-slate-800 font-bold py-2 rounded-lg transition"
        >
            Guardar cambios
        </button>
    </form>
</div>
@endsection