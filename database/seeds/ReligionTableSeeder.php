<?php

use Illuminate\Database\Seeder;

class ReligionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religions')->insert([
            'name' => 'Islam'
        ]);

        DB::table('religions')->insert([
            'name' => 'Buddha'
        ]);

        DB::table('religions')->insert([
            'name' => 'Hindu'
        ]);

        DB::table('religions')->insert([
            'name' => 'Lain - Lain'
        ]);
    }
}
