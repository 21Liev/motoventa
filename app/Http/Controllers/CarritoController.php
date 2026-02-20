<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    public function index()
    {
        $items = DB::table('cart_items')
            ->where('user_id', auth()->id())
            ->orderByDesc('id')
            ->get()
            ->map(function ($item) {

                if ($item->item_type === 'equipo') {
                    $producto = DB::table('equipo')->where('id', $item->item_id)->first();
                } else { // moto
                    $producto = DB::table('motos')->where('id', $item->item_id)->first();
                }

                $item->nombre = $producto->nombre ?? 'Producto eliminado';
                $item->precio = $producto->precio ?? 0;

                return $item;
            });

        return view('carrito', compact('items'));
    }

    public function agregar(Request $request)
    {
        $request->validate([
            'tipo' => 'required|in:moto,equipo',
            'item_id' => 'required|integer',
        ]);

        $userId = auth()->id();
        $tipo = $request->tipo;          // moto | equipo
        $itemId = (int) $request->item_id;

        $existente = DB::table('cart_items')
            ->where('user_id', $userId)
            ->where('item_type', $tipo)
            ->where('item_id', $itemId)
            ->first();

        if ($existente) {
            DB::table('cart_items')
                ->where('id', $existente->id)
                ->update([
                    'qty' => $existente->qty + 1,
                    'updated_at' => now(),
                ]);
        } else {
            DB::table('cart_items')->insert([
                'user_id' => $userId,
                'item_type' => $tipo,
                'item_id' => $itemId,
                'qty' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return back()->with('success', 'Agregado al carrito.');
    }

    public function eliminar($id)
    {
        DB::table('cart_items')
            ->where('user_id', auth()->id())
            ->where('id', $id)
            ->delete();

        return back()->with('success', 'Item eliminado.');
    }

    public function vaciar()
    {
        DB::table('cart_items')
            ->where('user_id', auth()->id())
            ->delete();

        return back()->with('success', 'Carrito vacío.');
    }

    public function mas($id)
{
    DB::table('cart_items')
        ->where('user_id', auth()->id())
        ->where('id', $id)
        ->increment('qty');

    return back();
}

public function menos($id)
{
    $item = DB::table('cart_items')
        ->where('user_id', auth()->id())
        ->where('id', $id)
        ->first();

    if (!$item) return back();

    if ($item->qty > 1) {
        DB::table('cart_items')
            ->where('id', $id)
            ->update([
                'qty' => $item->qty - 1,
                'updated_at' => now(),
            ]);
    } else {
        // si queda en 0, lo elimina
        DB::table('cart_items')
            ->where('id', $id)
            ->delete();
    }

    return back();
}
public function verCarritoCliente($id)
{
    $items = DB::table('cart_items')
        ->where('user_id', $id)
        ->orderByDesc('id')
        ->get()
        ->map(function ($item) {

            if ($item->item_type === 'equipo') {
                $producto = DB::table('equipo')->where('id', $item->item_id)->first();
            } else {
                $producto = DB::table('motos')->where('id', $item->item_id)->first();
            }

            $item->nombre = $producto->nombre ?? 'Producto eliminado';
            $item->precio = $producto->precio ?? 0;

            return $item;
        });

    return view('carrito_cliente', compact('items'));
}

}
