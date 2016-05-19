<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        DB::table('users')->insert([
            [
                'name' => 'Mia Tollaksvik',
                'email' => 'mia@mail.no',
                'password' => bcrypt('password1'),
            ],
            [
                'name' => 'Agne Ødegaard',
                'email' => 'agne@mail.no',
                'password' => bcrypt('password1'),
            ],
            [
                'name' => 'Vegard Brestad',
                'email' => 'vegard@mail.no',
                'password' => bcrypt('password1'),
            ],
            [
                'name' => 'Øyvind Grimstad',
                'email' => 'oyvind@mail.no',
                'password' => bcrypt('password1'),
            ]
        ]);
    }
}
