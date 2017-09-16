<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slides')->delete();
        
        \DB::table('slides')->insert(array (
            0 => 
            array (
                'id' => 5,
                'slide_title' => 'ADATA',
                'video_url' => NULL,
                'slide_image' => '31114_1498443582.jpg',
                'status' => 1,
                'description' => NULL,
                'created_at' => '2017-06-25 19:19:43',
                'updated_at' => '2017-06-25 19:19:43',
            ),
            1 => 
            array (
                'id' => 6,
                'slide_title' => 'AORUS',
                'video_url' => NULL,
                'slide_image' => '69796_1498443654.jpg',
                'status' => 1,
                'description' => 'Very Good',
                'created_at' => '2017-06-25 19:20:54',
                'updated_at' => '2017-06-25 19:20:54',
            ),
            2 => 
            array (
                'id' => 8,
                'slide_title' => 'GIGABITE',
                'video_url' => NULL,
                'slide_image' => '60333_1498443742.jpg',
                'status' => 1,
                'description' => 'Very Good',
                'created_at' => '2017-06-25 19:22:22',
                'updated_at' => '2017-06-25 19:22:22',
            ),
            3 => 
            array (
                'id' => 15,
                'slide_title' => 'AORUS',
                'video_url' => NULL,
                'slide_image' => '13724_1498446604.jpg',
                'status' => 1,
                'description' => 'Good',
                'created_at' => '2017-06-25 20:10:05',
                'updated_at' => '2017-06-25 20:10:05',
            ),
            4 => 
            array (
                'id' => 16,
                'slide_title' => 'ADATA',
                'video_url' => NULL,
                'slide_image' => '80697_1498529383.jpg',
                'status' => 1,
                'description' => 'Very Good',
                'created_at' => '2017-06-26 19:09:44',
                'updated_at' => '2017-06-26 19:09:44',
            ),
            5 => 
            array (
                'id' => 17,
                'slide_title' => 'ADATA',
                'video_url' => NULL,
                'slide_image' => '46315_1498529984.jpg',
                'status' => 1,
                'description' => 'Very Good',
                'created_at' => '2017-06-26 19:19:44',
                'updated_at' => '2017-06-26 19:19:44',
            ),
            6 => 
            array (
                'id' => 18,
                'slide_title' => 'ADATA',
                'video_url' => NULL,
                'slide_image' => '40082_1498530009.jpg',
                'status' => 1,
                'description' => 'Very Good',
                'created_at' => '2017-06-26 19:20:09',
                'updated_at' => '2017-06-26 19:20:09',
            ),
            7 => 
            array (
                'id' => 19,
                'slide_title' => 'ADATA',
                'video_url' => NULL,
                'slide_image' => '27492_1498530034.jpg',
                'status' => 1,
                'description' => 'Very Good',
                'created_at' => '2017-06-26 19:20:34',
                'updated_at' => '2017-06-26 19:20:34',
            ),
            8 => 
            array (
                'id' => 22,
                'slide_title' => 'ADATA',
                'video_url' => NULL,
                'slide_image' => '26696_1498530140.jpg',
                'status' => 1,
                'description' => 'Very Good',
                'created_at' => '2017-06-26 19:22:20',
                'updated_at' => '2017-06-26 19:22:20',
            ),
            9 => 
            array (
                'id' => 24,
                'slide_title' => 'ADATA',
                'video_url' => NULL,
                'slide_image' => '65198_1498530517.jpg',
                'status' => 1,
                'description' => 'Very Good',
                'created_at' => '2017-06-26 19:28:37',
                'updated_at' => '2017-06-26 19:28:37',
            ),
            10 => 
            array (
                'id' => 25,
                'slide_title' => 'ADATA',
                'video_url' => NULL,
                'slide_image' => '88745_1498532368.jpg',
                'status' => 1,
                'description' => 'Very Good',
                'created_at' => '2017-06-26 19:59:29',
                'updated_at' => '2017-06-26 19:59:29',
            ),
            11 => 
            array (
                'id' => 26,
                'slide_title' => 'ADATA',
                'video_url' => NULL,
                'slide_image' => '70445_1498532390.jpg',
                'status' => 1,
                'description' => 'Very Good',
                'created_at' => '2017-06-26 19:59:50',
                'updated_at' => '2017-06-26 19:59:50',
            ),
        ));
        
        
    }
}