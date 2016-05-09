<?php

use Illuminate\Database\Seeder;

class tags extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();
        
        DB::table('tags')->insert([
            [
                'name' => 'Antiques'
            ],
            [
                'name' => 'Art'
            ],
            [
                'name' => 'Baby'
            ],
            [
                'name' => 'Books'
            ],
            [
                'name' => 'Cameras'
            ],
            [
                'name' => 'Cars, Vehicles &amp; Parts'
            ],
            [
                'name' => 'Cell Phones'
            ]
        ]);
    }
}
