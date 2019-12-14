<?php


use Illuminate\Database\Seeder;

class MestosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('mestos')->delete();
        $mestos = array(
            array('id' => 1,'name' => "London",'krajinys_id' => 230),
            array('id' => 2,'name' => "Munich",'krajinys_id' => 82),
            array('id' => 3,'name' => "Moscow",'krajinys_id' => 181),
            array('id' => 4,'name' => "Madrid",'krajinys_id' => 205),
            array('id' => 5,'name' => "Genk",'krajinys_id' => 21),
            array('id' => 6,'name' => "Manchester",'krajinys_id' => 230),
            array('id' => 7,'name' => "Helsinki",'krajinys_id' => 74),
            array('id' => 8,'name' => "Wien",'krajinys_id' => 14),
            array('id' => 9,'name' => "Prague",'krajiny_sid' => 57),
            array('id' => 10,'name' => "Kiev",'krajinys_id' => 228),
            array('id' => 11,'name' => "Maribor",'krajinys_id' => 198),
            array('id' => 12,'name' => "Paris",'krajinys_id' => 75),
            array('id' => 13,'name' => "Amsterdam",'krajinys_id' => 155),

        );
        DB::table('mestos')->insert($mestos);
    }
}