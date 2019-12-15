<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podujatia extends Model
{
    protected $fillable = [
        'datum', 'Nazov', 'mestos_id','univerzities_id', 'krajinies_id', 'vyzvy_id', 'users_id','confirmed','pocitadlo',
    ];

    public function podKraj(){
        return $this->belongsTo('App\Krajiny', 'krajinies_id', 'id');
    }
    public function podUni(){
        return $this->belongsTo('App\Univerzity', 'univerzities_id', 'id');
    }
    public function podMes(){
        return $this->belongsTo('App\Mesto', 'mestos_id', 'id');
    }
    public function podUser(){
        return $this->belongsTo('App\User', 'users_id', 'id');
    }
    public function podVyz(){
        return $this->belongsTo('App\Vyzvy', 'vyzvy_id', 'id');
    }
}
