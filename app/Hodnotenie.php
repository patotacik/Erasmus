<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Hodnotenie extends Model
{
    protected $fillable = [
        'Otazka_1','Otazka_2','Otazka_3','Otazka_4','hodnotenie','potvrdenie','users_id','podujatia_id','pocitadlo',
    ];
    public function komentar()
    {
        return $this->belongsTo('App\Komentar', 'foreign_key');
    }
    public function user_nazov(){
        return $this->hasOne('App\User','id','users_id');

}
}