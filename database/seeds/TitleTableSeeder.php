<?php

use Illuminate\Database\Seeder;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            'name' => 'Encik'
        ]);

        DB::table('titles')->insert([
            'name' => 'Cik'
        ]);

        DB::table('titles')->insert([
            'name' => 'Puan'
        ]);


    }
}

