<?php

namespace Database\Seeders;

use App\Models\empleado;
use Illuminate\Database\Seeder;

class empleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        empleado::factory(5000)->create();
    }
}
