<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
	protected $table = 'evaluacion';

	protected $fillable = [
        'descripcion', 'fecha', 'cant_Preg_Aig', 'Asignatura_eval', 'tiempoEstipulado', 'estado', 'users_id',
    ];
}
