@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center text-slate-800 mb-10">Nuestro Equipo de Protección</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Tarjeta de equipo: casco -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden">
            <img src="https://images.unsplash.com/photo-1611004061856-ccc3cbe944b2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Casco de moto" class="w-full h-48 object-cover">
            <div class="p-5">
                <h2 class="text-xl font-semibold text-slate-800 mb-2">Casco Integral Pro</h2>
                <p class="text-slate-600">Máxima seguridad y ventilación, ideal para viajes largos.</p>
            </div>
        </div>

        <!-- Tarjeta de equipo: campera -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden">
            <img src="https://images.unsplash.com/photo-1542018751212-595220ec6db7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Campera de moto" class="w-full h-48 object-cover">
            <div class="p-5">
                <h2 class="text-xl font-semibold text-slate-800 mb-2">Campera con protecciones</h2>
                <p class="text-slate-600">Campera textil con refuerzos y diseño urbano.</p>
            </div>
        </div>

        <!-- Tarjeta de equipo: guantes -->
        <div class="bg-white rounded-2xl shadow-md overflow-hidden">
            <img src="https://images.unsplash.com/photo-1622314901629-e2d6f520fdd2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Guantes de moto" class="w-full h-48 object-cover">
            <div class="p-5">
                <h2 class="text-xl font-semibold text-slate-800 mb-2">Guantes Racing</h2>
                <p class="text-slate-600">Guantes deportivos con protección rígida y agarre antideslizante.</p>
            </div>
        </div>
    </div>
</div>
@endsection
