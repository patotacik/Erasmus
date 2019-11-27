<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Nicolaslopezj\Searchable\SearchableTrait;

class User extends Authenticatable
{

    use Notifiable;
    use SearchableTrait;
    protected $searchable = [
        'columns' => [
            'users.name' => 10,
            'users.email' => 5,
            'users.id' => 3,
        ]
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','roly_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    const ADMIN_TYPE = '3';
    const REFERENT_TYPE = '2';
    const UCASNIK_TYPE = '1';

    const DEFAULT_TYPE = 'default';
    public function isAdmin()    {
        return $this->roly_id == self::ADMIN_TYPE;
    }
    public function isReferent()    {
        return $this->roly_id == self::REFERENT_TYPE;
    }
    public function isUcasnik()    {
        return $this->roly_id == self::UCASNIK_TYPE;
    }
}
