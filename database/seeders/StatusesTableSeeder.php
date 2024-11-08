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
        Status::create(['nombre' => 'pendiente']);
        Status::create(['nombre' => 'aprobada']);
        Status::create(['nombre' => 'rechazada']);
        Status::create(['nombre' => 'en_proceso']);
    }
}

