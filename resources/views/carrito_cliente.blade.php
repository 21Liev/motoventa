@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Carrito del cliente</h1>

    @if($items->isEmpty())
        <p class="text-gray-600">Este cliente no tiene productos en el carrito.</p>
    @else
        <table class="w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2 border">Producto</th>
                    <th class="p-2 border">Tipo</th>
                    <th class="p-2 border">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td class="p-2 border">{{ $item->nombre }}</td>
                        <td class="p-2 border text-center">{{ ucfirst($item->item_type) }}</td>
                        <td class="p-2 border text-center">{{ $item->qty }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
