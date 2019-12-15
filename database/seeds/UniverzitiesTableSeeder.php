<?php


use Illuminate\Database\Seeder;

class UniverzitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('univerzities')->delete();
        $univerzities = array(
            array('id' => 1,'nazov' => "Queens college of London",'zaciatok' => "2015-10-10", 'koniec' => "2021-10-10", 'mestos_id' => 1,'krajinies_id' => 230),
            array('id' => 2,'nazov' => "University of Munich",'zaciatok' => "2018-10-12", 'koniec' => "2022-10-20", 'mestos_id' => 2,'krajinies_id' => 82),
            array('id' => 3,'nazov' => "Russian Institute of science",'zaciatok' => "2018-11-10", 'koniec' => "2022-10-19", 'mestos_id' => 3,'krajinies_id' => 181),
            array('id' => 4,'nazov' => "Madrid technology institute",'zaciatok' => "2019-12-10", 'koniec' => "2022-10-19", 'mestos_id' => 4,'krajinies_id' => 205),
            array('id' => 5,'nazov' => "University of Genk",'zaciatok' => "2018-10-10", 'koniec' => "2023-10-19", 'mestos_id' => 5,'krajinies_id' => 21),
            array('id' => 6,'nazov' => "West Manchester college",'zaciatok' => "2017-12-10", 'koniec' => "2023-10-18", 'mestos_id' => 6,'krajinies_id' => 230),
            array('id' => 7,'nazov' => "University of arts",'zaciatok' => "2016-10-22", 'koniec' => "2023-10-17", 'mestos_id' => 7,'krajinies_id' => 74),
            array('id' => 8,'nazov' => "University of Wien",'zaciatok' => "2016-10-20", 'koniec' => "2022-10-15", 'mestos_id' => 8,'krajinies_id' => 14),
            array('id' => 9,'nazov' => "Karlova univerzita",'zaciatok' => "2014-10-15", 'koniec' => "2023-10-12", 'mestos_id' => 9,'krajinies_id' => 57),
            array('id' => 10,'nazov' => "Lenins Institute",'zaciatok' => "2012-10-16", 'koniec' => "2023-11-10", 'mestos_id' => 10,'krajinies_id' => 228),
            array('id' => 11,'nazov' => "Maribor college of tech",'zaciatok' => "2012-10-17", 'koniec' => "2022-11-10", 'mestos_id' => 11,'krajinies_id' => 198),
            array('id' => 12,'nazov' => "France science university",'zaciatok' => "2015-10-10", 'koniec' => "2021-12-10", 'mestos_id' => 12,'krajinies_id' => 75),
            array('id' => 13,'nazov' => " Royal University",'zaciatok' => "2014-10-10", 'koniec' => "2021-12-10", 'mestos_id' => 13,'krajinies_id' => 155),

        );
        DB::table('univerzities')->insert($univerzities);
    }
}