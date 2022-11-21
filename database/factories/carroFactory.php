<?php

namespace Database\Factories;

use \App\Models\carro;
use Illuminate\Database\Eloquent\Factories\Factory;

class carroFactory extends Factory
{
    /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model=carro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fotoCarro'=>$this->faker->imageUrl($swid = 640, $height = 480),
            'placaCarro'=>$this->faker->swiftBicNumber(),
            'año'=>$this->faker->year($max = 'now'),
            'modeloCarro'=>$this->faker->text(),
            'tipoCarro'=>$this->faker->randomElement($array = array 
            ('Paila_Larga','Paila_corta','Turismo','pickup','Carrera','camion','Camioneta','DobleCabina',)),
            'ValorCarro'=>$this->faker->numberBetween($min = 450000, $max = 1000000)
            
        ];
    }
}
