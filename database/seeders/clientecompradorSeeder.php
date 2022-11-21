<?php

namespace Database\Seeders;

use App\Models\clientecomprador;
use Illuminate\Database\Seeder;

class clientecompradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        clientecomprador::factory(5000)->create();
    }
}
