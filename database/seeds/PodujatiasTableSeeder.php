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
            array('id' => 1,'Nazov' => 'Spoznaj Nemecko', 'datum' => '2019-12-13', 'mestos_id' => '2', 'univerzities_id' => '2', 'krajinies_id' => '82','vyzvy_id' => 1,'users_id' => 1, 'pocitadlo' => '5', 'popis' => 'Dokonalý zážitok na celý život', 'obrazok' => 'https://old.euba.sk/medzinarodne-vztahy/erasmus/preview-file/erasmus-16815.png'),
            array('id' => 2,'Nazov' => 'Spoznaj Anglicko', 'datum' => '2019-05-26', 'mestos_id' => '1', 'univerzietis_id' => '1', 'krajinies_id' => '230','vyzvy_id' => 2,'users_id' => 2, 'pocitadlo' => '12', 'popis' => 'Dokonalý zážitok na celý život', 'obrazok' => 'https://old.euba.sk/medzinarodne-vztahy/erasmus/preview-file/erasmus-16815.png'),
            array('id' => 3,'Nazov' => 'Spoznaj Cesko', 'datum' => '2019-10-21', 'mestos_id' => '9', 'univerzietis_id' => '9', 'krajinies_id' => '57','vyzvy_id' => 3,'users_id' => 2, 'pocitadlo' => '2', 'popis' => 'Dokonalý zážitok na celý život', 'obrazok' => 'https://old.euba.sk/medzinarodne-vztahy/erasmus/preview-file/erasmus-16815.png'),
            array('id' => 4,'Nazov' => 'Spoznaj Rakusko', 'datum' => '2019-02-05', 'mestos_id' => '8', 'univerzietis_id' => '8', 'krajinies_id' => '14','vyzvy_id' => 4,'users_id' => 1, 'pocitadlo' => '11', 'popis' => 'Dokonalý zážitok na celý život', 'obrazok' => 'https://old.euba.sk/medzinarodne-vztahy/erasmus/preview-file/erasmus-16815.png'),
            array('id' => 5,'Nazov' => 'Spoznaj Slovinsko', 'datum' => '2019-07-19', 'mestos_id' => '11', 'univerzietis_id' => '11', 'krajinies_id' => '198','vyzvy_id' => 5,'users_id' => 3, 'pocitadlo' => '15', 'popis' => 'Dokonalý zážitok na celý život', 'obrazok' => 'https://old.euba.sk/medzinarodne-vztahy/erasmus/preview-file/erasmus-16815.png'),
            array('id' => 6,'Nazov' => 'Spoznaj Rusko', 'datum' => '2019-08-24', 'mestos_id' => '3', 'univerzietis_id' => '3', 'krajinies_id' => '181','vyzvy_id' => 6,'users_id' => 3, 'pocitadlo' => '38', 'popis' => 'Dokonalý zážitok na celý život', 'obrazok' => 'https://old.euba.sk/medzinarodne-vztahy/erasmus/preview-file/erasmus-16815.png'),
        );
        DB::table('podujatias')->insert($podujatias);
    }
}
