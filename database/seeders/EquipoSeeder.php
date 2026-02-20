<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('equipo')->insert([
            [
                'nombre' => 'Casco Integral LS2 FF353',
                'categoria' => 'cascos',
                'descripcion' => 'Casco integral homologado, visor anti-rayas.',
                'precio' => 189999.00,
                'stock' => 10,
                'imagen' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Guantes Alpinestars SMX-1',
                'categoria' => 'guantes',
                'descripcion' => 'Guantes ventilados con protección en nudillos.',
                'precio' => 79999.00,
                'stock' => 15,
                'imagen' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Campera Cordura 4 estaciones',
                'categoria' => 'camperas',
                'descripcion' => 'Campera con protecciones y abrigo desmontable.',
                'precio' => 219999.00,
                'stock' => 8,
                'imagen' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Pantalón reforzado touring',
                'categoria' => 'pantalones',
                'descripcion' => 'Pantalón con refuerzos y protecciones en rodilla.',
                'precio' => 159999.00,
                'stock' => 6,
                'imagen' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Botas Urban Pro',
                'categoria' => 'botas',
                'descripcion' => 'Botas urbanas, suela antideslizante.',
                'precio' => 199999.00,
                'stock' => 5,
                'imagen' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Soporte celular para manillar',
                'categoria' => 'accesorios',
                'descripcion' => 'Soporte antivibración, ajuste universal.',
                'precio' => 29999.00,
                'stock' => 30,
                'imagen' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
