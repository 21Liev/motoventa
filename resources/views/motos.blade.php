<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Motos</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Listado de Motos</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($motos as $moto)
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h2 class="text-xl font-semibold">{{ $moto->nombre }} ({{ $moto->anio }})</h2>
                    <p class="text-gray-600 mt-2">{{ $moto->descripcion }}</p>
                    <p class="text-gray-800 font-semibold mt-2">Precio: ${{ $moto->precio }}</p>

                    @if ($moto->imagen)
                        <img src="{{ asset('storage/' . $moto->imagen) }}" alt="{{ $moto->nombre }}" class="mt-4 w-full h-48 object-cover rounded-lg">
                    @endif
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>

