<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PessoaFisicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PessoaFisica::factory()->count(100)->create();
    }
}
