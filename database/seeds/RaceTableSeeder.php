<?php

use Illuminate\Database\Seeder;

class RaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('race')->insert([
            'name' => 'Melayu'
        ]);

        DB::table('race')->insert([
            'name' => 'Cina'
        ]);

        DB::table('race')->insert([
            'name' => 'India'
        ]);

        DB::table('race')->insert([
            'name' => 'Iban'
        ]);

        DB::table('race')->insert([
            'name' => 'Lain - Lain'
        ]);
    }
}
