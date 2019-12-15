<?php

use Illuminate\Database\Seeder;

class HodnoteniesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('hodnotenies')->delete();
        $hodnotenies = array(
            array('id' => 1,'otazka_1' => "Super",'otazka_2' => "Super",'otazka_3' => "Super",'otazka_4' => "Super",'hodnotenie' => "2", 'potvrdenie' => "1", 'users_id' => 1,'podujatias_id' => 1, 'pocitadlo' => "1"),
            array('id' => 2,'otazka_1' => "Super",'otazka_2' => "Super",'otazka_3' => "Super",'otazka_4' => "Super",'hodnotenie' => "1", 'potvrdenie' => "1", 'users_id' => 1,'podujatias_id' => 2, 'pocitadlo' => "2"),
            array('id' => 3,'otazka_1' => "Super",'otazka_2' => "Super",'otazka_3' => "Super",'otazka_4' => "Super",'hodnotenie' => "2", 'potvrdenie' => "1", 'users_id' => 2,'podujatias_id' => 1, 'pocitadlo' => "3"),
            array('id' => 4,'otazka_1' => "Super",'otazka_2' => "Super",'otazka_3' => "Super",'otazka_4' => "Super",'hodnotenie' => "2", 'potvrdenie' => "1", 'users_id' => 2,'podujatias_id' => 3, 'pocitadlo' => "4"),
            array('id' => 5,'otazka_1' => "Super",'otazka_2' => "Super",'otazka_3' => "Super",'otazka_4' => "Super",'hodnotenie' => "3", 'potvrdenie' => "1", 'users_id' => 3,'podujatias_id' => 4, 'pocitadlo' => "5"),
            array('id' => 6,'otazka_1' => "Super",'otazka_2' => "Super",'otazka_3' => "Super",'otazka_4' => "Super",'hodnotenie' => "2", 'potvrdenie' => "1", 'users_id' => 3,'podujatias_id' => 5, 'pocitadlo' => "6"),
        );
        DB::table('hodnotenies')->insert($hodnotenies);
    }
}