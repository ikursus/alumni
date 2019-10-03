<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RaceTableSeeder::class);
        $this->call(ReligionTableSeeder::class);
        $this->call(TitleTableSeeder::class);
    }
}
