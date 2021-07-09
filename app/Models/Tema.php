<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
    protected $table = 'tema';
    protected $guarded = [];

    public function temaPregunta()
    {
        return $this->belongsTo('App\Models\Pregunta', 'pregunta_id');
    }
}
