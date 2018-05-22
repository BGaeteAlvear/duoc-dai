<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GameType extends Model
{
    protected $fillable = [
        'id', 'name', 'description'
    ];
}
