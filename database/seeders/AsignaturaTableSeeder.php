<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asignatura;

class AsignaturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asignatura::create(['nombre' => 'Ingles', 'competencia_id' => 1]);
        Asignatura::create(['nombre' => 'Lectura critica', 'competencia_id' => 1]);
        Asignatura::create(['nombre' => 'Competencia ciudadana', 'competencia_id' => 1]);
        Asignatura::create(['nombre' => 'Razonamiento cuantitativo', 'competencia_id' => 1]);
        Asignatura::create(['nombre' => 'Comunicacion escrita', 'competencia_id' => 1]);

        Asignatura::create(['nombre' => 'Formulación de proyectos de ingeniería', 'competencia_id' => 2]);
        Asignatura::create(['nombre' => 'Pensamiento científico - matemáticas y estadística', 'competencia_id' => 2]);
        Asignatura::create(['nombre' => 'Diseño de software', 'competencia_id' => 2]);
    }
}
