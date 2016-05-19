<?php

use Illuminate\Database\Seeder;

class Items extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->delete();
        $items = [
            [
                'header' => 'Selling this thing',
                'image' => '1.jpg',
                'content' => 'this thing is very natural',
                'user_id' => 1,
            ],
            [
                'header' => 'Selling this thing 2',
                'image' => '2.jpg',
                'content' => 'this thing is very natural',
                'user_id' => 1,
            ],
            [
                'header' => 'Selling this thing 3',
                'image' => '2.jpg',
                'content' => 'mia er awesome',
                'user_id' => 1,
            ],
            [
                'header' => 'Selling this thing 4',
                'image' => '3.jpg',
                'content' => 'vegard og øyvind er awesome',
                'user_id' => 1,
            ],
            
        ];
        foreach($items as &$item){
            $item['slug'] = str_slug(uniqid($item['header']), '-');
        }
        DB::table('items')->insert($items);
    }
}
