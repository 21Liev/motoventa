<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'a@motoventa.com',
                'password' => Hash::make('1'),
                'role' => 1, // admin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Usuario',
                'email' => 'u@motoventa.com',
                'password' => Hash::make('1'),
                'role' => 2, // cliente
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
