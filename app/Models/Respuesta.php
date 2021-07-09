<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;
    protected $table = 'respuesta';
    protected $guarded = [];

    public function respuestaPregunta()
    {
        return $this->belongsTo('App\Models\Pregunta', 'pregunta_id');
    }
}
