<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$useradmin=User::create([
    		    'tipo_Documento' => 'CC',
            'numero_Documento' => '1079940501',
            'name' => 'carlos calvo',
            'cargo' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
    	]);
    	$user1=User::create([
    		    'tipo_Documento' => 'CC',
            'numero_Documento' => '49730017',
            'name' => 'marcos witt',
            'cargo' => 'Estudiante',
            'email' => 'marcos@gmail.com',
            'password' => Hash::make('marcos'),
    	]);
    }
}
