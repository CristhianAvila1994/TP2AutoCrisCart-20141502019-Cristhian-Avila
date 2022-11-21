<?php

namespace Database\Factories;

use App\Models\empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class empleadoFactory extends Factory
{
    /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model=empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name,
            'identidad'=>$this->faker->ean13(),
            'direccion'=>$this->faker->address,
            'telefono'=>$this->faker->tollFreePhoneNumber,
            'codigoEmpleado'=>$this->faker->numberBetween($min = 1, $max = 80)

        ];
    }
}
