<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Reserva::factory()->count(100)->create();
    }
}
