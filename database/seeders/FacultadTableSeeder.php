<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facultad;

class FacultadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facultad::create(['nombre' =>'Ingenieria y tecnologia']);
    }
}
