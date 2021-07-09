<?php

namespace Database\Factories;

use App\Models\Respuesta;
use App\Models\Pregunta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RespuestaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Respuesta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'respuesta_A' => $this->faker->text(50),
          'respuesta_B' => $this->faker->text(50),
          'respuesta_C' => $this->faker->text(50),
          'respuesta_D' => $this->faker->text(50),
          'pregunta_id' => $this->faker->unique()->numberBetween(1, Pregunta::count()),

        ];
    }
}
