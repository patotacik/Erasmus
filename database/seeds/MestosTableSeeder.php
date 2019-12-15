<?php


use Illuminate\Database\Seeder;

class MestosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('mestos')->delete();
        $mestos = array(
            array('id' => 1,'name' => "London",'krajinies_id' => 230),
            array('id' => 2,'name' => "Munich",'krajinies_id' => 82),
            array('id' => 3,'name' => "Moscow",'krajinies_id' => 181),
            array('id' => 4,'name' => "Madrid",'krajinies_id' => 205),
            array('id' => 5,'name' => "Genk",'krajinies_id' => 21),
            array('id' => 6,'name' => "Manchester",'krajinies_id' => 230),
            array('id' => 7,'name' => "Helsinki",'krajinies_id' => 74),
            array('id' => 8,'name' => "Wien",'krajinies_id' => 14),
            array('id' => 9,'name' => "Prague",'krajinies_id' => 57),
            array('id' => 10,'name' => "Kiev",'krajinies_id' => 228),
            array('id' => 11,'name' => "Maribor",'krajinies_id' => 198),
            array('id' => 12,'name' => "Paris",'krajinies_id' => 75),
            array('id' => 13,'name' => "Amsterdam",'krajinies_id' => 155),

        );
        DB::table('mestos')->insert($mestos);
    }
}