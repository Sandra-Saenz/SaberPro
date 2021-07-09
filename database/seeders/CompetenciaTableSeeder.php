<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Competencia;

class CompetenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Competencia::create(['nombre' =>'General']);
        Competencia::create(['nombre' =>'Especifica']);
    }
}
