<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podujatia extends Model
{
    protected $fillable = [
        'datum', 'Nazov', 'Miesto','users_id','confirmed','pocitadlo',
    ];
}
