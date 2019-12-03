<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podujatia extends Model
{
    protected $fillable = [
        'Nazov', 'datum', 'mesto_id','univerzity_id','krajiny_id','vyzvy_id','users_id','confirmed',
    ];
}
