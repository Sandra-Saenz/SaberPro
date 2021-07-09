<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    //use HasFactory;
    protected $table = 'asignatura';
    protected $fillable = ['nombre','competencia_id'];

    //relacion de muchos a muchos
    public function asignaturaPrograma(){
        return $this->belongsToMany('App\Models\Programa', 'programa_asignatura', 'asignatura_id', 'programa_id');
    }

    //relacion 1 a muchos
    public function asignaturaCompetencia()
    {
        return $this->belongsTo('App\Models\Competencia', 'competencia_id');
    }

    public function asignaturaPregunta()
    {
        return $this->hasMany('App\Models\Pregunta', 'asignatura_id', 'id');
    }

    public function scopeNombre($query, $nombre)
    {
      if (trim($nombre) != "") {
        $query->where('nombre', "LIKE", "%$nombre%");
      }
    }
}
