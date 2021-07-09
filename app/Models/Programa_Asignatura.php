<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa_Asignatura extends Model
{
    use HasFactory;

    protected $table = 'programa_asignatura';
    protected $fillable = ['programa_id', 'asignatura_id'];

    public $timestamps = false;
}
