<?php


use App\User;
use Illuminate\Database\Seeder;

class RoliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rolies')->delete();
        $rolies = array(
            array('id' => 1,'rola' => 'Admin'),
            array('id' => 2,'rola' => 'Referent'),
            array('id' => 3,'rola' => 'Ucasnik'),
        );
        DB::table('rolies')->insert($rolies);
    }
}