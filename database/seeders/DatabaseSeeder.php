<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use App\Models\Order;
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

        // 2. Crea 10 usuarios random
        User::factory(10)->create();

        // 3. Generar 50 productos falsos usando ProductFactory
        Product::factory(50)->create();

        // 4. Genera una serie de ordenes de prueba
        Order::factory(8)->create();

        /* 5. O llamar a otros Seeders organizados por separado
        $this->call([
            CategorySeeder::class,
            RoleSeeder::class,
        ]);
        */
    }
}
