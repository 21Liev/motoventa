@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center text-slate-800 mb-10">Agregar Nueva Moto</h1>

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-2xl mx-auto">
        <form method="POST" action="{{ route('motos.store') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="nombre" class="block text-sm font-medium text-slate-700">Nombre</label>
                <input type="text" name="nombre" required
                    class="w-full mt-2 p-3 rounded-xl border border-gray-300 focus:ring-yellow-400 focus:border-yellow-400 transition duration-300" />
            </div>

            <div>
                <label for="anio" class="block text-sm font-medium text-slate-700">Año</label>
                <input type="number" name="anio" required
                    class="w-full mt-2 p-3 rounded-xl border border-gray-300 focus:ring-yellow-400 focus:border-yellow-400 transition duration-300" />
            </div>

            <div>
                <label for="precio" class="block text-sm font-medium text-slate-700">Precio</label>
                <input type="text" name="precio" required
                    class="w-full mt-2 p-3 rounded-xl border border-gray-300 focus:ring-yellow-400 focus:border-yellow-400 transition duration-300" />
            </div>

            <div>
                <label for="descripcion" class="block text-sm font-medium text-slate-700">Descripción</label>
                <textarea name="descripcion" required
                    class="w-full mt-2 p-3 rounded-xl border border-gray-300 focus:ring-yellow-400 focus:border-yellow-400 transition duration-300"></textarea>
            </div>

            <!-- <div> LO COMenTA PARA HACER PRUEBAS
                <label for="imagen" class="block text-sm font-medium text-slate-700">Imagen</label>
                <input type="file" name="imagen"
                    class="w-full mt-2 p-2 rounded-xl border border-gray-300 focus:ring-yellow-400 focus:border-yellow-400 transition duration-300" />
            </div>-->
            

            <div class="flex justify-center items-center">
                <button type="submit"
                    class=" rounded px-6 py-4 overflow-hidden group bg-[#ebbf30] relative hover:bg-gradient-to-r hover:from-[#ebb630] hover:to-[#ffe435f6] text-[#3c340e] hover:ring-2 hover:ring-offset-2 hover:ring-[#968832] transition-all ease-out duration-300 shadow-lg shadow-[#0000008c]">
                    Agregar Moto
                </button>

            </div>
        </form>
    </div>
</div>
@endsection