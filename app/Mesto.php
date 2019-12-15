<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesto extends Model
{
    protected $fillable = [
        'id', 'name', 'krajinies_id',
    ];
}
