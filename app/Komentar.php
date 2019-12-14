<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $fillable = [
        'id', 'users_id','hodnotenies_id','koment',
    ];
}