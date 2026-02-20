<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Moto;

class MotoSeeder extends Seeder
{
    public function run(): void
    {
        Moto::create([
            'nombre' => 'Honda CB 500X',
            'anio' => 2022,
            'precio' => 12500000,
            'descripcion' => 'Moto touring ideal para ruta y ciudad, con excelente confort y bajo consumo.',
            'imagen' => 'cb500x.jpg',
        ]);

        Moto::create([
            'nombre' => 'Yamaha MT-07',
            'anio' => 2021,
            'precio' => 13900000,
            'descripcion' => 'Naked deportiva, liviana y potente, perfecta para uso urbano.',
            'imagen' => 'mt07.jpg',
        ]);

        Moto::create([
            'nombre' => 'Kawasaki Ninja 400',
            'anio' => 2023,
            'precio' => 15800000,
            'descripcion' => 'Deportiva ágil con estética racing y gran relación peso-potencia.',
            'imagen' => 'ninja400.jpg',
        ]);
    }
}
