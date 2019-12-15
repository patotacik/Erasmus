<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $fillable = [
        'id', 'users_id','hodnotenies_id','koment',
    ];
    public function hodKom(){
        return $this->hasMany('App\Hodnotenie', 'hodnotenies_id', 'id');
    }
    public function user_nazov(){
        return $this->hasOne('App\User','id','users_id');
    }
}