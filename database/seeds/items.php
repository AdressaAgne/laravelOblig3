<?php

use Illuminate\Database\Seeder;

class items extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('items')->delete();
        
        DB::table('items')->insert([
            [
                'header' => 'Selling this thing',
                'image' => '1.jpg',
                'content' => 'this thing is very natural',
            ],
            [
                'header' => 'Selling this thing 2',
                'image' => '1.jpg',
                'content' => 'this thing is very natural',
            ],
            [
                'header' => 'Selling this thing 3',
                'image' => '1.jpg',
                'content' => 'this thing is very natural',
            ],
            
        ]);
    }
}
