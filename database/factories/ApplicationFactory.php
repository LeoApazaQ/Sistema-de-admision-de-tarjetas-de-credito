<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\Client;
use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    protected $model = Application::class;

    public function definition(): array
    {
        //fecha aleatoria entre 2023-01-01 y 2024-12-31
        $randomDate = $this->faker->dateTimeBetween('2023-01-01', '2024-10-31');

        return [
            'title' => 'Solicitud de crédito - ' . $randomDate->format('d/m/Y H:i'),
            'status_id' => Status::inRandomOrder()->first()->id, // Obtener un estado aleatorio
            'client_id' => Client::inRandomOrder()->first()->id, // Obtener un cliente aleatorio
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
