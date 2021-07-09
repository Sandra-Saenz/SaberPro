<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Programa;

class ProgramaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Programa::create(['nombre' => 'Ingenieria de sistemas', 'facultad_id' => 1]);
    }
}
