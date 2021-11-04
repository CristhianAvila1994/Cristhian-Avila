<?php

namespace Database\Factories;

use App\Models\Registro;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
     /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model=Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_cliente'=>$this->faker->name,
            'direccion'=>$this->faker->address,
            'telefono'=>$this->faker->phoneNumber,
            'total'=>$this->faker->numberBetween(30,200)

        ];
    }
}
