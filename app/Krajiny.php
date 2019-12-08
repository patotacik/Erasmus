<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Krajiny extends Model
{
    protected $fillable = [
        'id', 'code','name','phonecode',
    ];
}
