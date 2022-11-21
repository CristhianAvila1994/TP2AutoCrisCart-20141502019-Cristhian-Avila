<?php

namespace Database\Factories;

use App\Models\clientecomprador;
use Illuminate\Database\Eloquent\Factories\Factory;

class clientecompradorFactory extends Factory
{
    /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model=clientecomprador::class;

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
            'telefono'=>$this->faker->tollFreePhoneNumber,
            'email'=>$this->faker->email(),
            'direccion'=>$this->faker->address,
            'fotocarro'=>$this->faker->imageUrl($width = 640, $height = 480),
            'placa'=>$this->faker->swiftBicNumber(),
            'totalPago'=>$this->faker->numberBetween($min = 450000, $max = 1000000)

        ];
    }
}
