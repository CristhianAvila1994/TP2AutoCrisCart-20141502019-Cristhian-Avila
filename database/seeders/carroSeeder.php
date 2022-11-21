<?php

namespace Database\Seeders;

use App\Models\carro;
use Illuminate\Database\Seeder;

class carroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        carro::factory(5000)->create();
    }
}
