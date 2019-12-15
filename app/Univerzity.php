<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Univerzity extends Model
{
    protected $fillable = [
        'Nazov', 'zaciatok', 'konec','krajiny_id',
    ];
}