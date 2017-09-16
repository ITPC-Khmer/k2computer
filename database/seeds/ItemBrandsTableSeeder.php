<?php

use Illuminate\Database\Seeder;

class ItemBrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_brands')->delete();
        
        \DB::table('item_brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'brand_name' => 'ADATA',
                'note' => 'Computer and phone',
                'image_logo' => '44205_1497924824.png',
                'option' => 'adata',
                'status' => 1,
                'created_at' => '2017-06-12 20:50:36',
                'updated_at' => '2017-06-19 19:13:45',
            ),
            1 => 
            array (
                'id' => 2,
                'brand_name' => 'GIGABYTE',
                'note' => NULL,
                'image_logo' => '51823_1497924605.png',
                'option' => 'GIGABYTE',
                'status' => 1,
                'created_at' => '2017-06-13 06:11:06',
                'updated_at' => '2017-06-19 19:10:05',
            ),
            2 => 
            array (
                'id' => 3,
                'brand_name' => 'SSK',
                'note' => NULL,
                'image_logo' => '19997_1497924579.png',
                'option' => 'SSK',
                'status' => 1,
                'created_at' => '2017-06-13 06:11:31',
                'updated_at' => '2017-06-19 19:09:39',
            ),
            3 => 
            array (
                'id' => 4,
                'brand_name' => 'ASUS',
                'note' => NULL,
                'image_logo' => '35720_1497924559.png',
                'option' => 'asus',
                'status' => 1,
                'created_at' => '2017-06-13 06:12:02',
                'updated_at' => '2017-06-19 19:09:19',
            ),
            4 => 
            array (
                'id' => 5,
                'brand_name' => 'COLORVIUS',
                'note' => NULL,
                'image_logo' => '89942_1497924500.png',
                'option' => 'Colorvius',
                'status' => 1,
                'created_at' => '2017-06-13 06:13:42',
                'updated_at' => '2017-06-19 19:08:20',
            ),
            5 => 
            array (
                'id' => 6,
                'brand_name' => 'DELL',
                'note' => NULL,
                'image_logo' => '63748_1497924406.png',
                'option' => 'dell',
                'status' => 1,
                'created_at' => '2017-06-13 06:14:10',
                'updated_at' => '2017-06-19 19:06:46',
            ),
            6 => 
            array (
                'id' => 8,
                'brand_name' => 'HOCO',
                'note' => NULL,
                'image_logo' => '40065_1497924045.png',
                'option' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 06:14:54',
                'updated_at' => '2017-06-19 19:00:45',
            ),
            7 => 
            array (
                'id' => 9,
                'brand_name' => 'NANSIN',
                'note' => NULL,
                'image_logo' => '53907_1497924008.png',
                'option' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 06:15:51',
                'updated_at' => '2017-06-19 19:00:08',
            ),
            8 => 
            array (
                'id' => 10,
                'brand_name' => 'INWIN',
                'note' => NULL,
                'image_logo' => '14897_1497923983.png',
                'option' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 06:16:31',
                'updated_at' => '2017-06-19 18:59:43',
            ),
            9 => 
            array (
                'id' => 11,
                'brand_name' => 'Weifi',
                'note' => NULL,
                'image_logo' => '76390_1497923918.png',
                'option' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 06:17:27',
                'updated_at' => '2017-06-19 18:58:39',
            ),
            10 => 
            array (
                'id' => 13,
                'brand_name' => 'VIEWSONIC',
                'note' => NULL,
                'image_logo' => '70779_1497924339.png',
                'option' => 'VIEWSONIC',
                'status' => 1,
                'created_at' => '2017-06-19 19:05:39',
                'updated_at' => '2017-06-19 19:05:39',
            ),
            11 => 
            array (
                'id' => 14,
                'brand_name' => 'Intel',
                'note' => NULL,
                'image_logo' => '58530_1497925305.png',
                'option' => 'Intel',
                'status' => 0,
                'created_at' => '2017-06-19 19:21:45',
                'updated_at' => '2017-06-19 19:21:45',
            ),
        ));
        
        
    }
}