<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Plataform extends Model
{
    protected $fillable = [
        'id', 'name', 'description'
    ];
}
