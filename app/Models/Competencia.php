<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    // use HasFactory;
    protected $table = 'competencia';
    protected $fillable = ['nombre'];

    //relacion 1 a muchos
    public function competenciaAsignatura()
    {
        return $this->hasMany('App\Models\Asignatura', 'competencia_id', 'id');
    }

    public function scopeNombre($query, $nombre)
    {
      if (trim($nombre) != "") {
        $query->where('nombre', "LIKE", "%$nombre%");
      }
    }
}
