<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Hodnotenies extends Model
{
    protected $fillable = [
       'Otazka_1','Otazka_2','Otazka_3','Otazka_4','hodnotenie','potvrdenie','users_id','podujatia_id'
    ];

}