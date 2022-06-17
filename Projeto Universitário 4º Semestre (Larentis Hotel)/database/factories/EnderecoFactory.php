<?php

namespace Database\Factories;

use App\Models\Endereco;
use App\Models\PessoaFisica;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnderecoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Endereco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pessoa_fisica_id' => PessoaFisica::factory()->create()->id,
            'cep'=>$this->faker->randomNumber($nbDigits = 8),
            'numero'=>$this->faker->numberBetween($min = 1, $max = 99),
        ];
    }
}
