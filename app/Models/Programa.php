<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;
    protected $table = 'programa';
    protected $fillable = ['nombre','facultad_id'];

    //relacion de muchos a muchos
    public function programaAsignatura(){
        return $this->belongsToMany('App\Models\Asignatura', 'programa_asignatura', 'programa_id', 'asignatura_id');
    }

    // public function programaUsuario(){
    //     return $this->belongsToMany('App\Models\Usuario', 'programa_usuario', 'programa_id', 'usuario_id');
    // }

    // relacion 1 a muchos
    public function programaFacultad()
    {
        return $this->belongsTo('App\Models\Facultad', 'facultad_id');
    }

    public function scopeNombre($query, $nombre)
    {
      if (trim($nombre) != "") {
        $query->where('nombre', "LIKE", "%$nombre%");
      }
    }
}
