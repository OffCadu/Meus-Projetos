<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Funcionario::factory()->count(100)->create();
    }
}
