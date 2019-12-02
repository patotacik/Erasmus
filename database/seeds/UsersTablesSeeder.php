<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Admin Smith',
            'email'    => 'admin@gmail.com',
            'password'   =>  Hash::make('password'),
            'remember_token' =>  str_random(10),
            'roly_id'    => '1',

        ]);
        User::create([
            'name'    => 'Referent Smith',
            'email'    => 'referent@gmail.com',
            'password'   =>  Hash::make('password'),
            'remember_token' =>  str_random(10),
            'roly_id'    => '2',


        ]);
        User::create([
            'name'    => 'Ucasnik Smith',
            'email'    => 'ucasnik@gmail.com',
            'password'   =>  Hash::make('password'),
            'remember_token' =>  str_random(10),
            'roly_id'    => '3',

        ]);
        }
}
