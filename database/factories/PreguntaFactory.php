<?php

namespace Database\Factories;

use App\Models\Pregunta;
use App\Models\Asignatura;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PreguntaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pregunta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'enunciado' => $this->faker->text(500),
          'respuesta_correcta' => chr(rand(ord("a"), ord("d"))), //letra randam
          'propietario_pregunta' => $this->faker->name,
          'asignatura_id' => Asignatura::all()->random()->id, //numero random
        ];
    }
}
