<?php


use Illuminate\Database\Seeder;

class MestoTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('mesto')->delete();
        $mesto = array(
            array('id' => 1,'name' => "London",'krajiny_id' => 230),
            array('id' => 2,'name' => "Munich",'krajiny_id' => 82),
            array('id' => 3,'name' => "Moscow",'krajiny_id' => 181),
            array('id' => 4,'name' => "Madrid",'krajiny_id' => 205),
            array('id' => 5,'name' => "Genk",'krajiny_id' => 21),
            array('id' => 6,'name' => "Manchester",'krajiny_id' => 230),
            array('id' => 7,'name' => "Helsinki",'krajiny_id' => 74),
            array('id' => 8,'name' => "Wien",'krajiny_id' => 14),
            array('id' => 9,'name' => "Prague",'krajiny_id' => 57),
            array('id' => 10,'name' => "Kiev",'krajiny_id' => 228),
            array('id' => 11,'name' => "Maribor",'krajiny_id' => 198),
            array('id' => 12,'name' => "Paris",'krajiny_id' => 75),
            array('id' => 13,'name' => "Amsterdam",'krajiny_id' => 155),

        );
        DB::table('mesto')->insert($mesto);
    }
}