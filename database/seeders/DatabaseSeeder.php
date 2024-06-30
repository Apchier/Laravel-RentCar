<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mobil;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Mobil::create([
            'user_id' => 1,
            'plat_nomor' => 'B 1234 CD',
            'merk' => 'BMW',
            'jenis' => 'BMW',
            'harga' => 'Rp 2.000.000',
            'foto' => 'path_to_foto.jpg',
        ]);

        Mobil::create([
            'user_id' => 2,
            'plat_nomor' => 'D 5678 EF',
            'merk' => 'Lamborghini',
            'jenis' => 'Lamborghini',
            'harga' => 'Rp 3.000.000',
            'foto' => 'path_to_foto.jpg',
        ]);
    }
}
