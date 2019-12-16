<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Univerzity extends Model
{
    protected $fillable = [
        'nazov', 'zaciatok', 'koniec','krajinies_id',
    ];

    public function podKraj(){
        return $this->belongsTo('App\Krajiny', 'krajinies_id', 'id');
    }

    public function podMes(){
        return $this->belongsTo('App\Mesto', 'mestos_id', 'id');
    }
}