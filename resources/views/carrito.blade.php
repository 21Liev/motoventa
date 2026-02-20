@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Mi carrito</h1>

    @if(session('success'))
    <div class="mb-4 p-3 bg-green-200 text-green-800 rounded">
        {{ session('success') }}
    </div>
    @endif

    @if($items->isEmpty())
    <p class="text-gray-600">No hay productos en el carrito.</p>
    @else
    <table class="w-full border">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2 border">Producto</th>
                <th class="p-2 border">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td class="p-2 border">
                    <strong>{{ $item->nombre ?? 'Sin nombre' }}</strong>
                    <br>
                    <span class="text-sm text-gray-500">{{ ucfirst($item->item_type) }}</span>
                </td>

                <td class="p-2 border text-center">
                    <div class="flex items-center justify-center gap-2">
                        <form action="{{ route('carrito.menos', $item->id) }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300 font-bold">
                                −
                            </button>
                        </form>

                        <span class="font-semibold">
                            {{ $item->qty }}
                        </span>

                        <form action="{{ route('carrito.mas', $item->id) }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300 font-bold">
                                +
                            </button>
                        </form>
                    </div>
                </td>


                <td class="p-2 border text-center">
                    <form action="{{ route('carrito.eliminar', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <form action="{{ route('carrito.vaciar') }}" method="POST" class="mt-6">
        @csrf
        <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
            Vaciar carrito
        </button>
    </form>
    @endif
</div>
@endsection