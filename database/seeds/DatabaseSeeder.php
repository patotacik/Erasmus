<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(KrajiniesTableSeeder::class);
        $this->call(RoliesTableSeeder::class);
        $this->call(MestosTableSeeder::class);
        $this->call(UniverzitiesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VyzvisTableSeeder::class);
        $this->call(PodujatiasTableSeeder::class);




    }
}
