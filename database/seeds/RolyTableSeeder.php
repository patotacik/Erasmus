<?php


use App\User;
use Illuminate\Database\Seeder;

class RolyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rolies')->delete();
        $roly = array(
            array('rola' => 'Admin'),
            array('rola' => 'Referent'),
            array('rola' => 'Ucasnik'),
        );
        DB::table('rolies')->insert($roly);
    }
}