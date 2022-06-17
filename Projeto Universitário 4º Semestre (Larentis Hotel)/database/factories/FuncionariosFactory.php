<?php

namespace Database\Factories;

use App\Models\PessoaFisica;;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuncionariosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Funcionario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pessoa_fisica_id' => PessoaFisica::factory()->create()->id,
            'clt'=>$this->faker->randomNumber($nbDigits = 8),
            'salario'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 15),
            'grau_instrucao'=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'data_admissao'=>$this->faker->dateTime($max = 'now', $timezone = null),
            'ativo'=>$this->faker->boolean()
        ];
    }
}
