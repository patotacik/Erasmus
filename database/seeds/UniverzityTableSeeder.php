<?php


use Illuminate\Database\Seeder;

class UniverzityTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('univerzity')->delete();
        $univerzity = array(
            array('id' => 1,'nazov' => "Queens college of London",'zmluva_od' => "2015-10-10", 'zmluva_do' => "2021-10-10", 'mesto_id' => 1,'krajinys_id' => 230),
            array('id' => 2,'nazov' => "University of Munich",'zmluva_od' => "2018-10-12", 'zmluva_do' => "2022-10-20", 'mesto_id' => 2,'krajinys_id' => 82),
            array('id' => 3,'nazov' => "Russian Institute of science",'zmluva_od' => "2018-11-10", 'zmluva_do' => "2022-10-19", 'mesto_id' => 3,'krajinys_id' => 181),
            array('id' => 4,'nazov' => "Madrid technology institute",'zmluva_od' => "2019-12-10", 'zmluva_do' => "2022-10-19", 'mesto_id' => 4,'krajinys_id' => 205),
            array('id' => 5,'nazov' => "University of Genk",'zmluva_od' => "2018-10-10", 'zmluva_do' => "2023-10-19", 'mesto_id' => 5,'krajinys_id' => 21),
            array('id' => 6,'nazov' => "West Manchester college",'zmluva_od' => "2017-12-10", 'zmluva_do' => "2023-10-18", 'mesto_id' => 6,'krajinys_id' => 230),
            array('id' => 7,'nazov' => "University of arts",'zmluva_od' => "2016-10-22", 'zmluva_do' => "2023-10-17", 'mesto_id' => 7,'krajinys_id' => 74),
            array('id' => 8,'nazov' => "University of Wien",'zmluva_od' => "2016-10-20", 'zmluva_do' => "2022-10-15", 'mesto_id' => 8,'krajinys_id' => 14),
            array('id' => 9,'nazov' => "Karlova univerzita",'zmluva_od' => "2014-10-15", 'zmluva_do' => "2023-10-12", 'mesto_id' => 9,'krajinys_id' => 57),
            array('id' => 10,'nazov' => "Lenins Institute",'zmluva_od' => "2012-10-16", 'zmluva_do' => "2023-11-10", 'mesto_id' => 10,'krajinys_id' => 228),
            array('id' => 11,'nazov' => "Maribor college of tech",'zmluva_od' => "2012-10-17", 'zmluva_do' => "2022-11-10", 'mesto_id' => 11,'krajinys_id' => 198),
            array('id' => 12,'nazov' => "France science university",'zmluva_od' => "2015-10-10", 'zmluva_do' => "2021-12-10", 'mesto_id' => 12,'krajinys_id' => 75),
            array('id' => 13,'nazov' => " Royal University",'zmluva_od' => "2014-10-10", 'zmluva_do' => "2021-12-10", 'mesto_id' => 13,'krajinys_id' => 155),

        );
        DB::table('univerzity')->insert($univerzity);
    }
}