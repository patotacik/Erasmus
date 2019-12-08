<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podujatia extends Model
{
    protected $fillable = [
        'datum', 'Nazov', 'Miesto','users_id','confirmed','pocitadlo',
    ];

    public function podKraj(){
        return $this->belongsTo('App\Krajiny', 'krajny_id', 'id');
    }
    public function podUni(){
        return $this->belongsTo('App\Univerzity', 'univerzity_id', 'id');
    }
    public function podMes(){
        return $this->belongsTo('App\Mesto', 'mesto_id', 'id');
    }
}
