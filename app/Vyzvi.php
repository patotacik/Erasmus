<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Vyzvi extends Model
{
    protected $fillable = [
        'Typ', 'detail', 'nazov_seminara','miesto_konania','cas_konanie','datum_konania',
    ];
}