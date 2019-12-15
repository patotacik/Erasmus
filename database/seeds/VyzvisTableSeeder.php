<?php

use Illuminate\Database\Seeder;

class VyzvisTableSeeder extends Seeder
{
    public function run()
    {
        $vyzvis = array(
            array('id' => 1,'typ' => "Študjiný pobyt",'nazov_seminara' => "Študjiný pobyt",'miesto_konania' => "Londyn",'cas_konanie' => "15:00:00", 'datum_konania' => "2021-10-10"),
            array('id' => 2,'typ' => "Študjiný pobyt",'nazov_seminara' => "Študjiný pobyt",'miesto_konania' => "Mnichov",'cas_konanie' => "15:00:00", 'datum_konania' => "2022-10-20"),
            array('id' => 3,'typ' => "Študjiný pobyt",'nazov_seminara' => "Študjiný pobyt",'miesto_konania' => "Moskva",'cas_konanie' => "15:00:00", 'datum_konania' => "2022-10-19"),
            array('id' => 4,'typ' => "Študjiný pobyt",'nazov_seminara' => "Študjiný pobyt",'miesto_konania' => "Madrid",'cas_konanie' => "15:00:00", 'datum_konania' => "2022-10-19"),
            array('id' => 5,'typ' => "Stáž",'nazov_seminara' => "Stáž",'miesto_konania' => "Genk",'cas_konanie' => "15:00:00", 'datum_konania' => "2023-10-19"),
            array('id' => 6,'typ' => "Stáž",'nazov_seminara' => "Stáž",'miesto_konania' => "Manchester",'cas_konanie' => "15:00:00", 'datum_konania' => "2023-10-18"),
            array('id' => 7,'typ' => "Stáž",'nazov_seminara' => "Stáž",'miesto_konania' => "Helsinki",'cas_konanie' => "15:00:00", 'datum_konania' => "2023-10-17"),
            array('id' => 8,'typ' => "Prednáškový pobyt",'nazov_seminara' => "Prednáškovy pobyt",'miesto_konania' => "Viedeň",'cas_konanie' => "15:00:00", 'datum_konania' => "2022-10-15"),
            array('id' => 9,'typ' => "Prednáškový pobyt",'nazov_seminara' => "Prednáškovy pobyt",'miesto_konania' => "Praha",'cas_konanie' => "15:00:00", 'datum_konania' => "2023-10-12"),
            array('id' => 10,'typ' => "Prednáškový pobyt",'nazov_seminara' => "Prednáškovy pobyt",'miesto_konania' => "Kyev",'cas_konanie' => "15:00:00", 'datum_konania' => "2023-11-10"),
            array('id' => 11,'typ' => "Prednáškový pobyt",'nazov_seminara' => "Prednáškovy pobyt",'miesto_konania' => "Maribor",'cas_konanie' => "15:00:00", 'datum_konania' => "2022-11-10"),
            array('id' => 12,'typ' => "Školenie",'nazov_seminara' => "Školenie",'miesto_konania' => "Paris",'cas_konanie' => "15:00:00", 'datum_konania' => "2021-12-10"),
            array('id' => 13,'typ' => "Školenie",'nazov_seminara' => "Školenie",'miesto_konania' => "Amsterdam",'cas_konanie' => "15:00:00", 'datum_konania' => "2021-12-10"),

        );
        DB::table('vyzvis')->insert($vyzvis);
    }
}
