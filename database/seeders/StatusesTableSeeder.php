<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;


class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create(['nombre' => 'Pendiente']);
        Status::create(['nombre' => 'Aprobada']);
        Status::create(['nombre' => 'Rechazada']);
        Status::create(['nombre' => 'En proceso']);
    }
}

