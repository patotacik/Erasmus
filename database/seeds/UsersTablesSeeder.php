<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        $users = array(
            array('id' => 1,'name' => "Admin Smith",'email' => "admin@gmail.com",'password' =>  Hash::make('password'),'remember_token' =>  str_random(10),'rolies_id' => 1),
            array('id' => 2,'name' => "Referent Smith",'email' => "referent@gmail.com",'password' =>  Hash::make('password'),'remember_token' =>  str_random(10),'rolies_id' => 2),
            array('id' => 3,'name' => "Ucastnik Smith",'email' => "ucastnik@gmail.com",'password' =>  Hash::make('password'),'remember_token' =>  str_random(10),'rolies_id' => 3),



        );
        DB::table('users')->insert($users);
    }

}
