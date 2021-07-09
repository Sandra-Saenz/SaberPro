<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;
    protected $table = 'facultad';
    protected $fillable = ['nombre'];

    public function facultadPrograma()
    {
        return $this->hasMany('App\Models\Programa', 'facultad_id', 'id');
    }

    public function scopeNombre($query, $nombre)
    {
      if (trim($nombre) != "") {
        $query->where('nombre', "LIKE", "%$nombre%");
      }
    }
}
