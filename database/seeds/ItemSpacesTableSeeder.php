<?php

use Illuminate\Database\Seeder;

class ItemSpacesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_spaces')->delete();
        
        \DB::table('item_spaces')->insert(array (
            0 => 
            array (
                'id' => 10,
                'category_id' => 4,
                'title' => 'SIZE',
                'description' => NULL,
                'option' => NULL,
                'created_at' => '2017-06-13 06:22:27',
                'updated_at' => '2017-06-13 06:22:27',
            ),
            1 => 
            array (
                'id' => 11,
                'category_id' => 4,
                'title' => 'BUS',
                'description' => NULL,
                'option' => NULL,
                'created_at' => '2017-06-13 06:22:45',
                'updated_at' => '2017-06-13 06:22:45',
            ),
            2 => 
            array (
                'id' => 12,
                'category_id' => 5,
                'title' => 'SIZE',
                'description' => NULL,
                'option' => NULL,
                'created_at' => '2017-06-13 06:22:58',
                'updated_at' => '2017-06-13 06:22:58',
            ),
            3 => 
            array (
                'id' => 13,
                'category_id' => 6,
                'title' => 'SIZE',
                'description' => NULL,
                'option' => NULL,
                'created_at' => '2017-06-13 06:24:11',
                'updated_at' => '2017-06-13 06:24:11',
            ),
            4 => 
            array (
                'id' => 14,
                'category_id' => 7,
                'title' => 'Genaretion',
                'description' => NULL,
                'option' => NULL,
                'created_at' => '2017-06-13 06:24:56',
                'updated_at' => '2017-06-13 06:24:56',
            ),
        ));
        
        
    }
}