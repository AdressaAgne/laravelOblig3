<?php

use Illuminate\Database\Seeder;

class Tags extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();
        
        $tagItem = [
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
                'name' => 'Cars, Vehicles & Parts'
            ],
            [
                'name' => 'Cell Phones'
            ],
            [
                'name' => 'Clothing, Shoes & Accessories'
            ],
            [
                'name' => 'Collectable'
            ],
            [
                'name' => 'Computers & Networking'
            ],
            [
                'name' => 'Crafts'
            ],
            [
                'name' => 'Electronics'
            ],
            [
                'name' => 'Health & Beauty'
            ],
            [
                'name' => 'Holiday & Seasonal'
            ],
            [
                'name' => 'Home & Garden'
            ],
            [
                'name' => 'Jewelry & Watches'
            ],
            [
                'name' => 'Movies & Tv-shows'
            ],
            [
                'name' => 'Music & Instruments'
            ],
            [
                'name' => 'Pets'
            ],
            [
                'name' => 'Sporting Goods'
            ],
            [
                'name' => 'Toys & Hobbies'
            ],
            [
                'name' => 'Video Games & Consolos'
            ],
            [
                'name' => 'Other Stuff'
            ]
        ];
        
        foreach($tagItem as &$tag){
            $tag['slug'] = str_slug($tag['name'], '-');
        }
            
        DB::table('tags')->insert($tagItem);
    }
}
