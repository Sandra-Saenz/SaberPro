<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Programa_Asignatura;

class ProgramaAsignaturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Programa_Asignatura::create(['programa_id' => 1, 'asignatura_id' => 1]);
        Programa_Asignatura::create(['programa_id' => 1, 'asignatura_id' => 2]);
        Programa_Asignatura::create(['programa_id' => 1, 'asignatura_id' => 3]);
        Programa_Asignatura::create(['programa_id' => 1, 'asignatura_id' => 4]);
        Programa_Asignatura::create(['programa_id' => 1, 'asignatura_id' => 5]);

        Programa_Asignatura::create(['programa_id' => 1, 'asignatura_id' => 6]);
        Programa_Asignatura::create(['programa_id' => 1, 'asignatura_id' => 7]);
        Programa_Asignatura::create(['programa_id' => 1, 'asignatura_id' => 8]);
    }
}
