<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Client::class;

    public function definition(): array
    {
        return [
            'nombres' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'dni' => $this->faker->numerify('########'),
            'fecha_nacimiento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber,
            'ingresos_mensuales' => $this->faker->numberBetween(1000, 10000),
            'ocupacion' => $this->faker->jobTitle,
        ];
    }
}
