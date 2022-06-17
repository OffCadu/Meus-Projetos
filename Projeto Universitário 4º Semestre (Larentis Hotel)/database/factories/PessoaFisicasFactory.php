<?php

namespace Database\Factories;

use App\Models\PessoaFisicas;
use App\Models\Pessoas;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

class PessoaFisicasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PessoaFisica::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => Users::factory()->create()->id,
            'cpf'=>$this->faker->randomNumber($nbDigits=9),
            'identidade'=>$this->faker->randomNumber($nbDigits=9),
            'uf'=>$this->faker->randomLetter,
            'telefone'=>$this->faker->randomNumber($nbDigits=9)
        ];
    }
}
