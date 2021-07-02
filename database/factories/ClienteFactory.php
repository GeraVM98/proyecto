<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'domicilio' => $this->faker->address(),
            'correo' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->e164PhoneNumber(),
            'nivel_id' => $this->faker->numberBetween(1,3)
        ];
    }
}
