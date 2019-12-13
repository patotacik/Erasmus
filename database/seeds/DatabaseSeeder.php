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

        $this->call(KrajinysTableSeeder::class);
        $this->call(RolyTableSeeder::class);
        $this->call(MestoTableSeeder::class);
        $this->call(UniverzityTableSeeder::class);
        $this->call(UsersTableSeeder::class);

    }
}
