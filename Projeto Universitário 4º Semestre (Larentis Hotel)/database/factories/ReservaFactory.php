<?php

namespace Database\Factories;

use App\Models\PessoaFisica;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reserva::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'pessoa_fisica_id' => PessoaFisica::factory()->create()->id,
        'check_in'=>$this->faker->dateTime($max = 'now', $timezone = NULL),
        'check_out'=>$this->faker->dateTime($max = 'now', $timezone = NULL),
        'adultos'=>$this->faker->randomDigit($nbDigits=1) ,
        'criancas'=>$this->faker->randomDigit($nbDigits=1)
        ];
    }
}
