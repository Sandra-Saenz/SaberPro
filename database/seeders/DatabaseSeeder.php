<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pregunta;
use App\Models\Respuesta;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TodosSeeder::class);
        $this->call(CompetenciaTableSeeder::class);
        $this->call(AsignaturaTableSeeder::class);
        $this->call(FacultadTableSeeder::class);
        $this->call(ProgramaTableSeeder::class);
        $this->call(ProgramaAsignaturaTableSeeder::class);
        Pregunta::factory()->count(20)->create();
        Respuesta::factory()->count(20)->create();

    }
}
