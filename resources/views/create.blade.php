<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Moto</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <h1 class="text-3xl font-bold mb-6">Agregar Nueva Moto</h1>

    <div class="max-w-7xl mx-auto p-6">
        <form method="POST" action="{{ route('motos.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" class="w-full mt-1 p-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="anio" class="block text-sm font-medium text-gray-700">Año</label>
                <input type="number" name="anio" class="w-full mt-1 p-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
                <input type="number" name="precio" class="w-full mt-1 p-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="descripcion" class="w-full mt-1 p-2 border border-gray-300 rounded-lg" required></textarea>
            </div>

            <div class="mb-4">
                <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen</label>
                <input type="file" name="imagen" class="w-full mt-1 p-2 border border-gray-300 rounded-lg">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300">Agregar Moto</button>
        </form>
    </div>

</body>
</html>
