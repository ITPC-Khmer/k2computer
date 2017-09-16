<?php

use Illuminate\Database\Seeder;

class WebSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('web_settings')->delete();
        
        \DB::table('web_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'home-category',
                'title' => 'Home Category',
                'key_value' => '["5","8","31","32","33"]',
                'key_type' => 'select',
                'select_value' => NULL,
                'created_at' => NULL,
                'updated_at' => '2017-07-03 20:04:20',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'product-category',
                'title' => 'PRODUCTS CATEGORY',
                'key_value' => '["4","5","7","8","31"]',
                'key_type' => 'select',
                'select_value' => '',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2017-07-27 20:50:38',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'email',
                'title' => 'E-mail',
                'key_value' => 'chhoy.dany@gmail.com',
                'key_type' => 'text',
                'select_value' => NULL,
                'created_at' => NULL,
                'updated_at' => '2017-06-21 18:49:35',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'address',
                'title' => 'Adress',
                'key_value' => 'Phnom Penh',
                'key_type' => 'text',
                'select_value' => NULL,
                'created_at' => NULL,
                'updated_at' => '2017-06-21 18:49:42',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'logo',
                'title' => 'Logo',
                'key_value' => '22617_1501143381.png',
                'key_type' => 'file',
                'select_value' => NULL,
                'created_at' => NULL,
                'updated_at' => '2017-07-27 01:16:21',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'phone_number',
                'title' => 'Phone_Number',
                'key_value' => '0967014246',
                'key_type' => 'text',
                'select_value' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}