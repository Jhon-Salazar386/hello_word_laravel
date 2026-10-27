<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {   

        // 1. Crear un usuario administrador específico
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        // 2. Generar 50 productos falsos usando ProductFactory
        Product::factory(50)->create();

        /* 3. O llamar a otros Seeders organizados por separado
        $this->call([
            CategorySeeder::class,
            RoleSeeder::class,
        ]);
        */
    }
}
