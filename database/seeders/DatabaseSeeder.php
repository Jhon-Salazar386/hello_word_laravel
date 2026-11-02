<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Distributor;
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

                // 1. Crear un usuario administrador específico
        User::factory()->create([
            'name' => 'Jhon',
            'email' => 'ikeak@plaiaundi.net',
            'password' => 'keith-386'
        ]);

        // 2. Crea 10 usuarios random
        User::factory(10)->create();

        // 3. Generar 50 productos falsos usando ProductFactory
        Product::factory(50)->create();

        // 4. Genera distribuidores de prueba
        Distributor::factory(10)->create();

        // 5. Genera una serie de ordenes de prueba
        Order::factory(8)->create();

        /* 6. O llamar a otros Seeders organizados por separado
        $this->call([
            CategorySeeder::class,
            RoleSeeder::class,
        ]);
        */
    }
}
