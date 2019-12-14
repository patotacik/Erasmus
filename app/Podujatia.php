<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podujatia extends Model
{
    protected $fillable = [
        'datum', 'Nazov','confirmed','pocitadlo',
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
}
