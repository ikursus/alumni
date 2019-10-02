<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'title_id' => 1,
            'name' => 'The Admin',
            'nric' => '808080668888',
            'gender' => 'lelaki',
            'phone' => '0123456789',
            'address' => 'UTM Space Skudai',
            'race_id' => 1,
            'religion_id' => 1,
            'nationality_id' => 1,
            'status_perkahwinan' => 'bujang',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        DB::table('users')->insert([
            'title_id' => 1,
            'name' => 'The Demo1',
            'nric' => '808080668888',
            'gender' => 'lelaki',
            'phone' => '0123456789',
            'address' => 'UTM Space Skudai',
            'race_id' => 1,
            'religion_id' => 1,
            'nationality_id' => 1,
            'status_perkahwinan' => 'bujang',
            'role' => 'admin',
            'email' => 'demo1@gmail.com',
            'password' => bcrypt('admin')
        ]);

        DB::table('users')->insert([
            'title_id' => 1,
            'name' => 'The Demo2',
            'nric' => '808080668888',
            'gender' => 'lelaki',
            'phone' => '0123456789',
            'address' => 'UTM Space Skudai',
            'race_id' => 1,
            'religion_id' => 1,
            'nationality_id' => 1,
            'status_perkahwinan' => 'bujang',
            'role' => 'admin',
            'email' => 'demo2@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }
}
