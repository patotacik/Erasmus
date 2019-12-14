<?php

use Illuminate\Database\Seeder;

class PodujatiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('podujatias')->delete();
        $podujatias = array(
            array('id' => 1,'Nazov' => 'Fantastický výlet', 'datum' => '2019-12-13', 'mestos_id' => '2', 'univerzities_id' => '2', 'krajinies_id' => '82', 'pocitadlo' => '5'),
            array('id' => 2,'Nazov' => 'Užasný Lond', 'datum' => '2019-05-26', 'mestos_id' => '1', 'univerzietis_id' => '1', 'krajinies_id' => '230', 'pocitadlo' => '12'),
            array('id' => 3,'Nazov' => 'Umíš česky?', 'datum' => '2019-10-21', 'mestos_id' => '9', 'univerzietis_id' => '9', 'krajinies_id' => '57', 'pocitadlo' => '2'),
            array('id' => 4,'Nazov' => 'Sprechen sie', 'datum' => '2019-02-05', 'mestos_id' => '8', 'univerzietis_id' => '8', 'krajinies_id' => '14', 'pocitadlo' => '11'),
            array('id' => 5,'Nazov' => 'Slovania ? Slovakia?', 'datum' => '2019-07-19', 'mestos_id' => '11', 'univerzietis_id' => '11', 'krajinies_id' => '198', 'pocitadlo' => '15'),
            array('id' => 6,'Nazov' => 'Blyatiful', 'datum' => '2019-08-24', 'mestos_id' => '3', 'univerzietis_id' => '3', 'krajinies_id' => '181', 'pocitadlo' => '38'),
        );
        DB::table('podujatias')->insert($podujatias);
    }
}
