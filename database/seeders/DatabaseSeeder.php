<?php

namespace Database\Seeders;

use App\Models\carro;
use App\Models\clientecomprador;
use App\Models\empleado;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            carroSeeder::class,
            empleadoSeeder::class,
            clientecompradorSeeder::class
        ]);
    }
}
