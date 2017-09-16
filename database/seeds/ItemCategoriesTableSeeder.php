<?php

use Illuminate\Database\Seeder;

class ItemCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_categories')->delete();
        
        \DB::table('item_categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'title' => 'Computer Accessory',
                'description' => 'Computer',
                'parent' => 0,
                'option' => '{"lang":{"kh":"\\u1782\\u17d2\\u179a\\u17bf\\u1784\\u1794\\u1793\\u17d2\\u179b\\u17b6\\u179f\\u17cb \\u1780\\u17bb\\u17c6\\u1796\\u17d2\\u1799\\u17bc\\u1791\\u17d0\\u179a"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-12 21:04:32',
                'updated_at' => '2017-06-15 06:09:03',
            ),
            1 => 
            array (
                'id' => 4,
                'title' => 'RAM',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"RAM"}}',
                'image_url' => '90339_1498536196.jpg',
                'status' => 1,
                'created_at' => '2017-06-13 04:48:38',
                'updated_at' => '2017-06-26 21:03:16',
            ),
            2 => 
            array (
                'id' => 5,
                'title' => 'VGA',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"\\u179c\\u17b8\\u1787\\u17b8\\u17a2\\u17c1"}}',
                'image_url' => '11274_1498536216.jpg',
                'status' => 1,
                'created_at' => '2017-06-13 05:51:45',
                'updated_at' => '2017-06-26 21:03:37',
            ),
            3 => 
            array (
                'id' => 6,
                'title' => 'HDD',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"\\u17a0\\u17b6\\u178f\\u178c\\u17b8\\u179f"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 05:53:34',
                'updated_at' => '2017-06-13 05:53:34',
            ),
            4 => 
            array (
                'id' => 7,
                'title' => 'CPU',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"\\u179f\\u17ca\\u17b8\\u1797\\u17b8\\u1799\\u17bc"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 05:54:05',
                'updated_at' => '2017-06-13 05:54:05',
            ),
            5 => 
            array (
                'id' => 8,
                'title' => 'SSD',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"\\u17a2\\u17c1\\u179f \\u17a2\\u17c1\\u179f \\u178c\\u17b8"}}',
                'image_url' => '35586_1498536261.jpg',
                'status' => 1,
                'created_at' => '2017-06-13 05:55:08',
                'updated_at' => '2017-06-26 21:04:21',
            ),
            6 => 
            array (
                'id' => 9,
                'title' => 'Power Suply',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"\\u1795\\u17c5\\u179c\\u17d0\\u179a\\u179f\\u17ca\\u17bb\\u1794\\u1795\\u17d2\\u179b\\u17b6\\u1799"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 05:56:01',
                'updated_at' => '2017-06-13 05:56:01',
            ),
            7 => 
            array (
                'id' => 11,
                'title' => 'Mouse + Keybaord',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"\\u1798\\u17c9\\u17c5 \\u1793\\u17b7\\u1784 \\u1783\\u17b8\\u1794\\u178f"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 05:58:51',
                'updated_at' => '2017-06-13 05:58:51',
            ),
            8 => 
            array (
                'id' => 12,
                'title' => 'Case',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"\\u1792\\u17bb\\u1784"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 05:59:38',
                'updated_at' => '2017-06-13 05:59:38',
            ),
            9 => 
            array (
                'id' => 13,
                'title' => 'Phone Accessory',
                'description' => NULL,
                'parent' => 0,
                'option' => '{"lang":{"kh":"\\u1782\\u17d2\\u179a\\u17bf\\u1784\\u1794\\u1793\\u17d2\\u179b\\u17c7\\u1791\\u17bc\\u179a\\u179f\\u17d0\\u1796\\u17d2\\u1791"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 06:00:53',
                'updated_at' => '2017-06-13 06:00:53',
            ),
            10 => 
            array (
                'id' => 14,
                'title' => 'Case',
                'description' => NULL,
                'parent' => 13,
                'option' => '{"lang":{"kh":"\\u179f\\u17c6\\u1794\\u1780"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 06:01:26',
                'updated_at' => '2017-06-13 06:01:26',
            ),
            11 => 
            array (
                'id' => 15,
                'title' => 'Charge Cable',
                'description' => NULL,
                'parent' => 13,
                'option' => '{"lang":{"kh":"\\u1781\\u17d2\\u179f\\u17c2\\u179f\\u17b6\\u1780"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 06:02:11',
                'updated_at' => '2017-06-13 06:02:11',
            ),
            12 => 
            array (
                'id' => 16,
                'title' => 'Charger',
                'description' => NULL,
                'parent' => 13,
                'option' => '{"lang":{"kh":"\\u178a\\u17bb\\u17c6\\u179f\\u17b6\\u1780"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 06:02:46',
                'updated_at' => '2017-06-13 06:02:46',
            ),
            13 => 
            array (
                'id' => 17,
                'title' => 'Screen',
                'description' => NULL,
                'parent' => 13,
                'option' => '{"lang":{"kh":"\\u179f\\u17d2\\u179a\\u17d2\\u1782\\u17b8\\u1793"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 06:03:16',
                'updated_at' => '2017-06-13 06:03:16',
            ),
            14 => 
            array (
                'id' => 18,
                'title' => 'Power Bank',
                'description' => NULL,
                'parent' => 13,
                'option' => '{"lang":{"kh":"\\u1790\\u17d2\\u1798\\u1787\\u17bb\\u17c6\\u1793\\u17bd\\u1799"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 06:04:34',
                'updated_at' => '2017-06-13 06:04:34',
            ),
            15 => 
            array (
                'id' => 19,
                'title' => 'DESKTOPS',
                'description' => NULL,
                'parent' => 0,
                'option' => '{"lang":{"kh":"\\u1780\\u17bb\\u17c6\\u1796\\u17d2\\u1799\\u17bc\\u1791\\u17d0\\u179a\\u179b\\u17be\\u178f\\u17bb"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-13 19:06:36',
                'updated_at' => '2017-06-13 19:06:36',
            ),
            16 => 
            array (
                'id' => 23,
                'title' => 'Gamer',
                'description' => NULL,
                'parent' => 19,
                'option' => '{"lang":{"kh":"\\u17a0\\u17d2\\u1782\\u17c1\\u1798"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-15 07:02:55',
                'updated_at' => '2017-06-15 07:02:55',
            ),
            17 => 
            array (
                'id' => 24,
                'title' => 'Designer',
                'description' => NULL,
                'parent' => 19,
                'option' => '{"lang":{"kh":"\\u178c\\u17b8\\u179f\\u17b6\\u1789"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-15 07:04:21',
                'updated_at' => '2017-06-15 07:04:21',
            ),
            18 => 
            array (
                'id' => 25,
                'title' => 'Clone',
                'description' => NULL,
                'parent' => 19,
                'option' => '{"lang":{"kh":"\\u1780\\u17d2\\u179b\\u17bc\\u1793"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-15 07:04:58',
                'updated_at' => '2017-06-15 07:04:58',
            ),
            19 => 
            array (
                'id' => 26,
                'title' => 'Office',
                'description' => NULL,
                'parent' => 20,
                'option' => '{"lang":{"kh":"\\u1780\\u17b6\\u179a\\u17b7\\u1799\\u17b6\\u179b\\u17d0\\u1799"}}',
                'image_url' => NULL,
                'status' => 0,
                'created_at' => '2017-06-15 07:05:59',
                'updated_at' => '2017-06-15 07:05:59',
            ),
            20 => 
            array (
                'id' => 29,
                'title' => 'Speaker',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"\\u179f\\u17d2\\u1796\\u17b8\\u1780\\u1783\\u17d0\\u179a"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-15 07:21:58',
                'updated_at' => '2017-06-15 07:21:58',
            ),
            21 => 
            array (
                'id' => 31,
                'title' => 'Mother Board',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"\\u1798\\u17c9\\u17b6\\u179f\\u17ca\\u17b8\\u1793"}}',
                'image_url' => '60685_1498535228.jpg',
                'status' => 1,
                'created_at' => '2017-06-19 18:34:50',
                'updated_at' => '2017-06-26 20:47:08',
            ),
            22 => 
            array (
                'id' => 32,
                'title' => 'USB Flash Drive',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"\\u17a0\\u17d2\\u179b\\u17b6\\u179f \\u178a\\u17d2\\u179a\\u17b6\\u1799"}}',
                'image_url' => '49120_1498535384.jpg',
                'status' => 1,
                'created_at' => '2017-06-19 18:35:37',
                'updated_at' => '2017-06-26 20:49:46',
            ),
            23 => 
            array (
                'id' => 33,
                'title' => 'External',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"External"}}',
                'image_url' => '91174_1498529432.jpg',
                'status' => 1,
                'created_at' => '2017-06-19 18:36:58',
                'updated_at' => '2017-06-26 19:10:34',
            ),
            24 => 
            array (
                'id' => 34,
                'title' => 'Wire Cable',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"\\u1781\\u17d2\\u179f\\u17c2 VGA & HDMI"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-19 18:39:12',
                'updated_at' => '2017-06-19 18:39:12',
            ),
            25 => 
            array (
                'id' => 35,
                'title' => 'CD ROM',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"CD ROM"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-19 18:52:03',
                'updated_at' => '2017-06-19 18:52:03',
            ),
            26 => 
            array (
                'id' => 36,
                'title' => 'Monitor',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"\\u17a2\\u17c1\\u1780\\u17d2\\u179a\\u1784\\u17cb"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-19 18:52:36',
                'updated_at' => '2017-06-19 18:52:36',
            ),
            27 => 
            array (
                'id' => 37,
                'title' => 'Network Card',
                'description' => NULL,
                'parent' => 3,
                'option' => '{"lang":{"kh":"\\u178e\\u17c1\\u178f\\u179c\\u1780 \\u1780\\u17b6\\u178f"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-19 18:53:27',
                'updated_at' => '2017-06-19 18:53:27',
            ),
            28 => 
            array (
                'id' => 40,
                'title' => 'Car Camera',
                'description' => NULL,
                'parent' => 13,
                'option' => '{"lang":{"kh":"\\u1780\\u17b6\\u1798\\u17c1\\u179a\\u17c9\\u17b6\\u200b \\u17a1\\u17b6\\u1793"}}',
                'image_url' => '51499_1498442831.jpg',
                'status' => 1,
                'created_at' => '2017-06-20 21:10:27',
                'updated_at' => '2017-06-25 19:07:12',
            ),
            29 => 
            array (
                'id' => 41,
            'title' => 'Brix (Mini PC)',
                'description' => NULL,
                'parent' => 3,
            'option' => '{"lang":{"kh":"Brix (Mini PC)"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-06-26 19:58:15',
                'updated_at' => '2017-06-26 19:58:15',
            ),
            30 => 
            array (
                'id' => 42,
                'title' => 'lebtops',
                'description' => NULL,
                'parent' => 0,
                'option' => '{"lang":{"kh":"lebtop"}}',
                'image_url' => NULL,
                'status' => 0,
                'created_at' => '2017-07-27 01:39:05',
                'updated_at' => '2017-07-27 01:39:38',
            ),
            31 => 
            array (
                'id' => 43,
                'title' => 'Office',
                'description' => NULL,
                'parent' => 42,
                'option' => '{"lang":{"kh":"\\u1780\\u17b6\\u179a\\u17b7\\u1799\\u17b6\\u179b\\u17d0\\u1799"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-07-27 21:21:09',
                'updated_at' => '2017-07-27 21:21:09',
            ),
            32 => 
            array (
                'id' => 44,
                'title' => 'Gammer',
                'description' => NULL,
                'parent' => 42,
                'option' => '{"lang":{"kh":"Gammer"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-07-27 21:21:35',
                'updated_at' => '2017-07-27 21:21:35',
            ),
            33 => 
            array (
                'id' => 45,
                'title' => 'Designer',
                'description' => NULL,
                'parent' => 42,
                'option' => '{"lang":{"kh":"\\u178c\\u17b7\\u179f\\u17b6\\u1789"}}',
                'image_url' => NULL,
                'status' => 1,
                'created_at' => '2017-07-27 21:22:07',
                'updated_at' => '2017-07-27 21:22:07',
            ),
        ));
        
        
    }
}