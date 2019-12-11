<?php


namespace App;


class Image extends Model
{
    protected $fillable = ['filename'];


    public function imageable()
    {
        return $this->morphTo();
    }

    public function hodnotenies()
    {
        return $this->belongsTo(Hodnotenies::class);
    }
}