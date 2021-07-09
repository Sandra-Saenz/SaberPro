<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentacion extends Model
{
    use HasFactory;
    protected $table = 'documentacion';
    protected $guarded = [];

    public function documentacionPregunta()
    {
        return $this->belongsTo('App\Models\Pregunta', 'pregunta_id');
    }
}
