<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users_Programa extends Model
{
    protected $table = 'users_programa';

     public $timestamps = false;

     protected $fillable = [
        'users_id', 'programa_id',
    ];

}
