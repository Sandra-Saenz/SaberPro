<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    protected $table = 'pregunta';
    protected $guarded = [];

    public function preguntaRespuesta()
    {
        return $this->hasMany('App\Models\Respuesta', 'pregunta_id', 'id');
    }

    public function preguntaAsignatura()
    {
        return $this->belongsTo('App\Models\Asignatura', 'asignatura_id');
    }

    public function preguntaTema()
    {
        return $this->hasMany('App\Models\Tema', 'pregunta_id', 'id');
    }

    public function preguntaDocumentacion()
    {
        return $this->hasMany('App\Models\Documentacion', 'pregunta_id', 'id');
    }

    public function scopeAsignatura($query, $asignatura)
    {
      if (trim($asignatura) != "") {
        $query->where('asignatura_id', "LIKE", "%$asignatura%");
      }
    }

    public function getGetImageAttribute()
    {
        if ($this->imagen_enunciado) {
          return url("storage/$this->imagen_enunciado");
        }
    }
}
