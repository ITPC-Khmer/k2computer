<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'id' => 7,
                'category_id' => 31,
                'brand_id' => 2,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'Gigabyte Motherboard GA-H81-D3',
                'description' => '<br>',
                'option' => '{"lang":{"kh":"Gigabyte Motherboard GA-H81-D3"}}',
                'start_price' => 110.0,
                'promotion_price' => 100.0,
                'promotion_expire_date' => '2017-06-20',
                'image_url' => '["22692_1497929162.jpg","50521_1497929227.jpg","84399_1497929227.jpg","17870_1497929227.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-19 20:26:22',
                'updated_at' => '2017-06-19 20:27:29',
            ),
            1 => 
            array (
                'id' => 8,
                'category_id' => 31,
                'brand_id' => 2,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'Gigabyte Motherboard GA-H81-D3P',
                'description' => NULL,
                'option' => '{"lang":{"kh":"Gigabyte Motherboard GA-H81-D3P"}}',
                'start_price' => 120.0,
                'promotion_price' => 100.0,
                'promotion_expire_date' => '2017-06-20',
                'image_url' => '["75678_1497929308.jpg","38303_1497929309.jpg","37418_1497929309.jpg","18646_1497929309.jpg","59713_1497929780.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-19 20:36:33',
                'updated_at' => '2017-06-19 20:36:33',
            ),
            2 => 
            array (
                'id' => 9,
                'category_id' => 31,
                'brand_id' => 2,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'Gigabyte Motherboard GA-H81M-DS2',
                'description' => NULL,
                'option' => '{"lang":{"kh":"Gigabyte Motherboard GA-H81M-DS2"}}',
                'start_price' => 150.0,
                'promotion_price' => 120.0,
                'promotion_expire_date' => '2017-06-20',
                'image_url' => '["42211_1497929837.jpg","97729_1497929837.jpg","45748_1497929837.jpg","36240_1497929941.jpg","27150_1497929941.jpg","78314_1497929940.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-19 20:39:09',
                'updated_at' => '2017-06-19 20:39:09',
            ),
            3 => 
            array (
                'id' => 10,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External HD710M',
                'description' => '<p>








<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 1TB<br></td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" align="left">: Camouflage</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" align="left">: 132 x 99 x 22mm / 5.2 x 3.9 x 0.9"</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" align="left">: 220g / 7.8oz</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" align="left">: USB 3.0 (backward compatible with USB2.0)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Operating Temperature</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: 5–50°C / 41–121°F</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">System requirements</td>
<td class="adata_table_line_x_h10" align="left">
: Windows XP or later<br>&nbsp; Mac OS X 10.6 or later<br>&nbsp;
Linux Kernel 2.6 or later<br>
</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Accessories</td>
<td class="adata_table_line_x_h10" align="left">: USB 3.0 cable, Quick Start Guide</td>
</tr>

<td class="adata_table_title13_bg_gray_line" align="left">- Warranty</td>
<td class="adata_table_line_0_h10" align="left">: 3 years</td></p>',
                'option' => '{"lang":{"kh":"External HD710M"}}',
                'start_price' => 72.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["30822_1497930549.jpg","72391_1497930549.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-19 20:48:45',
                'updated_at' => '2017-06-21 19:57:01',
            ),
            4 => 
            array (
                'id' => 11,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External HD720',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">&nbsp;: 1TB</td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: Black / Blue / Green</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: 129.4 x 97.9 x 20.2 mm / 5.1 x 3.9 x 0.8 in</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: 211g / 7.4 oz (500GB), 223g / 7.9 oz (1TB/2TB)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: SuperSpeed USB 3.0 (backward compatible with USB 2.0)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- System requirements</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: Windows XP or later<br>
&nbsp;&nbsp;Mac OS X 10.6 or later<br>
&nbsp;&nbsp;Linux Kernel 2.6 or later</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Accessories</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: USB 3.0 cable; Quick Start Guide</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Op. Temperature</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: 5°C (41°F) to 50°C (121°F)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Op. Voltage</td>
<td class="adata_table_line_x_h10" align="left">: USB DC 5V</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Texture</td>
<td class="adata_table_line_0_h10" align="left">: Plastic / Silicone Rubber</td>
</tr>

<td class="adata_table_title13_bg_gray_line" align="left">- Warranty</td>
<td class="adata_table_line_0_h10" align="left">: 3 Years</td></p>',
                'option' => '{"lang":{"kh":"External HD720"}}',
                'start_price' => 65.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["80864_1497930729.jpg","29003_1497930849.jpg","53601_1497930849.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-19 20:54:23',
                'updated_at' => '2017-06-21 19:58:52',
            ),
            5 => 
            array (
                'id' => 12,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External HD710',
                'description' => '<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 1TB<br>
&nbsp;</td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Yellow / Black / Blue</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 132 x 99 x 22 mm (5.2 x 3.9 x 0.9in)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 220g (7.8oz)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" width="647" align="left">: SuperSpeed USB 3.0 (backward compatible with USB 2.0)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Texture</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Plastic / Rubber</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 3 years</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Opt. Voltage</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB DC 5V</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- System requirements</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Windows XP or later<br>
Mac OS X 10.6 or later<br>
Linux Kernel 2.6 or later</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Accessories</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB 3.0 cable; Quick Start Guide</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Opt. Temperature</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 5°C (41°F) to 50°C (121°F)</td>',
                'option' => '{"lang":{"kh":"External HD710"}}',
                'start_price' => 70.0,
                'promotion_price' => 65.0,
                'promotion_expire_date' => NULL,
                'image_url' => '["86456_1497931115.jpg","63203_1497931115.jpg","80076_1497931115.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-19 21:01:45',
                'updated_at' => '2017-06-21 20:01:47',
            ),
            6 => 
            array (
                'id' => 13,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External HC500',
                'description' => NULL,
                'option' => '{"lang":{"kh":"External HC500"}}',
                'start_price' => 55.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["37404_1498009205.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 18:41:24',
                'updated_at' => '2017-06-20 18:41:24',
            ),
            7 => 
            array (
                'id' => 14,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External HC660',
                'description' => '<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">:1TB</td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" align="left">: Titanium</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" align="left">: 120 x 76 x 9.6 mm / 4.7 x 3.0 x 0.38"</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" align="left">: 124g / 4.3oz</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Texture</td>
<td class="adata_table_line_x_h10" align="left">: Metal/Plastic</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" align="left">: USB 3.0, backward compatible with USB 2.0</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Operating system requirements</td>
<td class="adata_table_line_x_h10" align="left">
: Windows XP or later<br>
&nbsp; Mac OS X 10.6 or later<br>
&nbsp; Linux Kernel 2.6 or later<br>
</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Op. Temperature</td>
<td class="adata_table_line_x_h10" align="left">: 5°C(41°F) to 50°C(121°F)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Op. Voltage</td>
<td class="adata_table_line_x_h10" align="left">: DC 5V, 900mA</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Accessories</td>
<td class="adata_table_line_0_h10" align="left">: USB3.0 cable; Quick Start Guide</td>
</tr>

<td class="adata_table_title13_bg_gray_line" align="left">- Warranty</td>
<td class="adata_table_line_0_h10" align="left">: 3 year</td>',
                'option' => '{"lang":{"kh":"External HC660"}}',
                'start_price' => 65.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["49180_1498009675.jpg","61262_1498009675.jpg","64348_1498009675.jpg","75524_1498009675.jpg","38583_1498009675.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 18:52:33',
                'updated_at' => '2017-06-20 19:09:12',
            ),
            8 => 
            array (
                'id' => 15,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External HD650',
                'description' => NULL,
                'option' => '{"lang":{"kh":"External HD650"}}',
                'start_price' => 65.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["30634_1498009993.jpg","33036_1498009993.jpg","58447_1498009993.jpg","60378_1498010023.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 18:53:48',
                'updated_at' => '2017-06-20 18:53:48',
            ),
            9 => 
            array (
                'id' => 16,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External HD650X',
                'description' => NULL,
                'option' => '{"lang":{"kh":"External HD650X"}}',
                'start_price' => 107.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["20113_1498010089.jpg","56174_1498010089.jpg","82610_1498010090.jpg","38386_1498010090.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 18:55:29',
                'updated_at' => '2017-06-20 18:55:29',
            ),
            10 => 
            array (
                'id' => 17,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External HD700',
                'description' => NULL,
                'option' => '{"lang":{"kh":"External HD700"}}',
                'start_price' => 65.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["81883_1498010189.jpg","46154_1498010189.jpg","38329_1498010189.jpg","37805_1498010189.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 18:56:38',
                'updated_at' => '2017-06-20 18:56:38',
            ),
            11 => 
            array (
                'id' => 18,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External HD710A',
                'description' => NULL,
                'option' => '{"lang":{"kh":"External HD710A"}}',
                'start_price' => 70.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["76485_1498010270.jpg","80136_1498010270.jpg","51919_1498010270.jpg","71107_1498010270.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 18:57:58',
                'updated_at' => '2017-06-20 18:57:58',
            ),
            12 => 
            array (
                'id' => 19,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External HE720',
                'description' => NULL,
                'option' => '{"lang":{"kh":"External HE720"}}',
                'start_price' => 95.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["92792_1498010373.jpg","62487_1498010373.jpg","34965_1498010373.jpg","17288_1498010373.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 18:59:37',
                'updated_at' => '2017-06-20 18:59:37',
            ),
            13 => 
            array (
                'id' => 20,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External HM900',
                'description' => NULL,
                'option' => '{"lang":{"kh":"External HM900"}}',
                'start_price' => 107.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["17438_1498010461.jpg","11365_1498010461.jpg","64317_1498010461.jpg","91495_1498010461.jpg","56005_1498010461.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 19:01:06',
                'updated_at' => '2017-06-20 19:01:06',
            ),
            14 => 
            array (
                'id' => 21,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External HV100',
                'description' => NULL,
                'option' => '{"lang":{"kh":"External HV100"}}',
                'start_price' => 62.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["81138_1498010530.jpg","55309_1498010531.jpg","45397_1498010531.jpg","25460_1498010531.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 19:02:28',
                'updated_at' => '2017-06-20 19:02:28',
            ),
            15 => 
            array (
                'id' => 22,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External HV620S',
                'description' => NULL,
                'option' => '{"lang":{"kh":"External HV620S"}}',
                'start_price' => 60.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["60795_1498010619.jpg","60205_1498010620.jpg","27024_1498010620.jpg","23015_1498010620.jpg","80095_1498010620.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 19:04:49',
                'updated_at' => '2017-06-20 19:04:49',
            ),
            16 => 
            array (
                'id' => 23,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External NH13',
                'description' => NULL,
                'option' => '{"lang":{"kh":"External NH13"}}',
                'start_price' => 65.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["72200_1498010797.jpg","18723_1498010797.jpg","59548_1498010797.jpg","25615_1498010797.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 19:06:48',
                'updated_at' => '2017-06-20 19:06:48',
            ),
            17 => 
            array (
                'id' => 24,
                'category_id' => 32,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'C008 USB Flash Drive',
                'description' => '<p>- Capacity
&nbsp;            :&nbsp; 8GB<br>- Color&nbsp;
: Blue / Red<br>


- Dimensions (L x W x H)
:&nbsp; 59.95 x 19.83 x 8.85mm (L x W x H)


<br>- Weight&nbsp;
: 10g<br>


- Interface
:&nbsp; USB 2.0<br>


- Performance
:&nbsp; N/A


<br>- System Requirements
:&nbsp; Windows XP, Vista, 7, 8, 8.1, 10, Mac OS 9.X and Linux™ Kernel 2.4 or higher, with no :&nbsp;&nbsp;&nbsp;&nbsp; device driver needed<br>


- Warranty
: Lifetime Warranty</p>',
                'option' => '{"lang":{"kh":"C008 USB Flash Drive"}}',
                'start_price' => 6.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["87989_1498011405.jpg","80883_1498011405.jpg","44099_1498011405.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 19:21:03',
                'updated_at' => '2017-06-20 19:21:03',
            ),
            18 => 
            array (
                'id' => 25,
                'category_id' => 32,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'C906 USB Flash Drive',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 16GB<br></td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Black / White</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 58 x 17.6 x 10.4mm (L x W x H)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 9g</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB 2.0</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Performance</td>
<td class="adata_table_line_x_h10" width="647" align="left">: N/A</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- System Requirements</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Windows XP, Vista, 7, 8, 8.1, 10, Mac OS 9.X and Linux™ Kernel 2.4 or higher, with no device driver needed</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Lifetime Warranty</td></p>',
                'option' => '{"lang":{"kh":"C906 USB Flash Drive"}}',
                'start_price' => 8.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["82149_1498011781.jpg","24791_1498011781.jpg","81520_1498011781.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 19:25:43',
                'updated_at' => '2017-06-20 19:25:43',
            ),
            19 => 
            array (
                'id' => 26,
                'category_id' => 32,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'UV100 USB Flash Drive',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 8GB<br></td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Black/Blue/Red</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 41 x 19.3 x 5.8mm (L x W x H)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 4g</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB 2.0</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Performance</td>
<td class="adata_table_line_x_h10" width="647" align="left">: N/A</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- System Requirements</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Windows XP, Vista, 7, 8, 8.1, 10, Mac OS 9.X and Linux™ Kernel 2.4 or higher, with no device driver needed</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Lifetime Warranty</td></p>',
                'option' => '{"lang":{"kh":"UV100 USB Flash Drive"}}',
                'start_price' => 6.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["74292_1498012040.jpg","86726_1498012040.jpg","46040_1498012039.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 19:28:49',
                'updated_at' => '2017-06-20 19:28:49',
            ),
            20 => 
            array (
                'id' => 27,
                'category_id' => 32,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'UC510 USB Flash Drive',
                'description' => '<p>- Capacity
: 16GB<br>


- Color
: Black/Blue <br>- Interface
: USB 3.0 (backward compatible with USB 2.0)<br>- Performance
: N/A<br>


- System Requirements
: Windows XP/Vista/7/8/8.1/10 or later<br>                                                
Mac OSX 10.5 or later<br>                                                 Linux Kernel 2.6 or later</p><p>


- Warranty
: Lifetime Warranty</p>',
                'option' => '{"lang":{"kh":"UC510 USB Flash Drive"}}',
                'start_price' => 9.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["78097_1498012261.jpg","98657_1498012262.jpg","85386_1498012262.jpg","92697_1498012261.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 19:36:24',
                'updated_at' => '2017-06-20 20:12:09',
            ),
            21 => 
            array (
                'id' => 28,
                'category_id' => 32,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'UV128 USB Flash Drive',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 32GB<br></td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Black/Blue &amp; Black/Yellow</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 60 x 20 x 9mm (L x W x H)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 10g</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB 3.0 (backward compatible with USB 2.0)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Performance</td>
<td class="adata_table_line_x_h10" width="647" align="left">: N/A</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- System Requirements</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Windows XP/Vista/7/8/8.1/10 or later<br>&nbsp;
Mac OSX 10.5 or later<br>
<br>
: Linux Kernel 2.6 or later</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Lifetime Warranty</td></p>',
                'option' => '{"lang":{"kh":"UV128 USB Flash Drive"}}',
                'start_price' => 13.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["77998_1498012655.jpg","67238_1498012655.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 19:40:22',
                'updated_at' => '2017-06-20 19:40:22',
            ),
            22 => 
            array (
                'id' => 29,
                'category_id' => 32,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'UV140 USB Flash Drive',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">&nbsp;: 16GB<br></td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: Blue/Red</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: 43 x 16 x 8mm(LxWxH)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: 4g</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: USB 3.0, backward compatible with USB 2.0</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- System requirements</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: Windows XP, Vista, 7, 8, 8.1, 10 <br>
&nbsp;&nbsp; Mac OS X 10.6 or later&nbsp; <br>
&nbsp;&nbsp; Linux Kernel 2.6 or later</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" align="left">: Lifetime Warranty</td></p>',
                'option' => '{"lang":{"kh":"UV140 USB Flash Drive"}}',
                'start_price' => 10.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["17146_1498012913.jpg","48970_1498012913.jpg","57640_1498012913.jpg","62731_1498012913.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 19:43:28',
                'updated_at' => '2017-06-20 19:43:28',
            ),
            23 => 
            array (
                'id' => 30,
                'category_id' => 32,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'UV150 USB Flash Drive',
                'description' => '<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 16GB<br></td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Black/Red</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 58 x 18 x 10mm (L x W x H)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 9g</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB 3.0 (backward compatible with USB 2.0)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Performance</td>
<td class="adata_table_line_x_h10" width="647" align="left">: N/A</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- System Requirements</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Windows XP, Vista, 7, 8, 8.1, 10, Mac OS 9.X and Linux™ Kernel 2.4 or higher, with no&nbsp;&nbsp;&nbsp; device driver needed</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Lifetime Warranty</td>',
                'option' => '{"lang":{"kh":"UV150 USB Flash Drive"}}',
                'start_price' => 13.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["74701_1498013107.jpg","99712_1498013107.jpg","25693_1498013334.jpg","27107_1498013334.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 19:49:04',
                'updated_at' => '2017-06-20 19:49:04',
            ),
            24 => 
            array (
                'id' => 31,
                'category_id' => 32,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'UV210 USB Flash Drive',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 32GB</td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Housing</td>
<td class="adata_table_line_x_h10" align="left">: Metal</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" align="left">: 39 x 12.2 x 4.5mm/1.54 x 0.48 x 0.18 inch</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" align="left">: 6g /0.21oz</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" align="left">: USB 2.0</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" align="left">: lifetime</td></p>',
                'option' => '{"lang":{"kh":"UV210 USB Flash Drive"}}',
                'start_price' => 14.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["24054_1498013488.jpg","24697_1498013489.jpg","95644_1498013489.jpg","69656_1498013488.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 19:52:20',
                'updated_at' => '2017-06-20 19:52:20',
            ),
            25 => 
            array (
                'id' => 32,
                'category_id' => 18,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'A100 50 Power Bank',
            'description' => '<p>- Capacity&nbsp; &nbsp; :<span class="Apple-tab-span" style="white-space:pre">	</span>10050mAh (Lithium-ion rechargeable battery 37.2Wh)</p><p>- Colors&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :<span class="Apple-tab-span" style="white-space:pre">	</span>Titanium Grey、Silver、Gold、Rose Gold</p><p>- Dimensions (L x W x H)&nbsp; &nbsp; :<span class="Apple-tab-span" style="white-space:pre">	</span>100 x 60 x 22mm / 3.93 x 2.36 x 0.86"</p><p>- Weight&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<span class="Apple-tab-span" style="white-space:pre">	</span>220g / 7.8oz</p><p>- Input&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<span class="Apple-tab-span" style="white-space:pre">	</span>DC 5V/2A (Micro USB)</p><p>- Output&nbsp;&nbsp;&nbsp;&nbsp;:<span class="Apple-tab-span" style="white-space:pre">	</span>DC 5V 2.1A (Type-A USB)</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DC&nbsp;&nbsp;5V 1.0A (Type-A USB)</p><p>- Accessory&nbsp;&nbsp;&nbsp;&nbsp;:<span class="Apple-tab-span" style="white-space:pre">	</span>Micro USB Cable; User Manual</p><p>- Warranty&nbsp;&nbsp;&nbsp;&nbsp;:<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;1 year</p>',
                'option' => '{"lang":{"kh":"A100 50 Power Bank"}}',
                'start_price' => 33.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["53813_1498013897.png","15292_1498013898.png"]',
                'status' => 1,
                'created_at' => '2017-06-20 20:02:37',
                'updated_at' => '2017-06-20 20:02:37',
            ),
            26 => 
            array (
                'id' => 33,
                'category_id' => 32,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'UC330 USB OTG',
                'description' => '<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 8GB<br></td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Silver zinc body &amp; black cap</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 31 x 17 x 11mm (L x W x H)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 3.6g</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB 2.0</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Performance</td>
<td class="adata_table_line_x_h10" width="647" align="left">: N/A</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- System Requirements</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Windows XP, Vista, 7, 8, 8.1, 10 and Mac OS 9.X or higher, with no device driver&nbsp;&nbsp; needed <br>
Mobile devices running Android 4.1 or higher</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Lifetime Warranty</td>',
                'option' => '{"lang":{"kh":"UC330 USB OTG"}}',
                'start_price' => 9.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["57327_1498014195.jpg","38544_1498014195.jpg","13696_1498014194.jpg","96707_1498014197.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 20:06:30',
                'updated_at' => '2017-06-20 20:06:30',
            ),
            27 => 
            array (
                'id' => 34,
                'category_id' => 32,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'UC350 USB OTG',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">&nbsp;: 16GB/32GB/64GB</td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: Golden</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: 29.3 x 18.8 x 7.8 mm</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: 5g(0.18oz)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: Switchable Type-A and Type-C USB 3.1(Gen 1) connectors, backward compatible with USB 2.0/USB 3.0</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- System requirements</td>
<td class="adata_table_line_x_h10" align="left">
:&nbsp; MAC OS 9.0 or later<br>
&nbsp;Chromebook Pixel<br>
&nbsp;Windows XP,7, 8, 8.1,10<br>
&nbsp;Linux Kernel 2.4.2 or later<br>
&nbsp;Mobile devices running Android OS 4.0 or later<br>
&nbsp;With USB Type-C transmission joint smart phones and tablets (the device itself must support OTG&nbsp;&nbsp; function)<br>
</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: lifetime warranty</td></p>',
                'option' => '{"lang":{"kh":"UC350 USB OTG"}}',
                'start_price' => 17.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["51811_1498014439.jpg","99134_1498014440.jpg","54758_1498014440.jpg","19165_1498014440.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 20:11:28',
                'updated_at' => '2017-06-20 20:11:28',
            ),
            28 => 
            array (
                'id' => 35,
                'category_id' => 18,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'PV150 Power Bank',
            'description' => '<p>- Capacity&nbsp; &nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;10000mAh (Lithium-ion rechargeable battery 36Wh)</p><p>- Colors&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Black / White / Blue</p><p>- Dimensions&nbsp; &nbsp; : (L x W x H)<span class="Apple-tab-span" style="white-space:pre">	</span>99 x 84 x 24mm / 3.9 x 3.3 x 0.9"</p><p>- Weight&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;235g / 8.3oz</p><p>- Input&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;DC 5V/2A (microUSB)</p><p>- Output&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;DC 5V 2.1A (Type-A USB)</p><p>- Accessory&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Micro USB Cable; User Manual</p><p>- Warranty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;1 Year</p>',
                'option' => '{"lang":{"kh":"PV150 Power Bank"}}',
                'start_price' => 18.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["71044_1498014670.jpg","59847_1498014670.jpg","15921_1498014670.jpg","11319_1498014670.jpg","67315_1498014670.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 20:16:00',
                'updated_at' => '2017-06-20 20:16:00',
            ),
            29 => 
            array (
                'id' => 36,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'SC660H External SSD',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 256GB<br></td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Titanium</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" width="647" align="left">&nbsp;: 120 x 76 x 9.6 mm / 4.7 x 3.0 x 0.38"</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Weight</td>
<td class="adata_table_line_x_h10" align="left">: 73g / 2.6oz</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Texture</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Metal/plastic</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB 3.1,backward compatible with USB 2.0</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Performance</td>
<td class="adata_table_line_x_h10" width="647" align="left">
: Read: up to 440MB/s<br>&nbsp;Write: up to 430MB/s<br>
*Performance may vary based on SSD capacity, hardware test 
platform, test software, operating system and other variables<br>
</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Operating system requirements</td>
<td class="adata_table_line_x_h10" align="left">
: Windows XP/Vista/7/8/8.1/10<br>&nbsp;
Mac OS X 10.6 or later<br>&nbsp;Linux Kernel 2.6 or later<br>
</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Operating temperature</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 5°C (41°F) to 50°C (121°F)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Operating voltage</td>
<td class="adata_table_line_x_h10" align="left">: DC 5V, 900mA</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Accessories</td>
<td class="adata_table_line_x_h10" align="left">: USB 3.1 cable, quick start guide</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 3 years</td></p>',
                'option' => '{"lang":{"kh":"SC660H External SSD"}}',
                'start_price' => 107.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["94845_1498015115.jpg","58228_1498015115.jpg","58965_1498015115.jpg","11575_1498015115.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 20:21:21',
                'updated_at' => '2017-06-20 20:21:21',
            ),
            30 => 
            array (
                'id' => 37,
                'category_id' => 18,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'PT100 Power Bank',
            'description' => '<p>- Capacity&nbsp; &nbsp; :<span class="Apple-tab-span" style="white-space:pre">	</span>10000mAh (Rechargeable Lithium-ion battery)</p><p>- Colors&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :<span class="Apple-tab-span" style="white-space:pre">	</span>Black / White</p><p>- Dimensions&nbsp; &nbsp; : (L x W x H)<span class="Apple-tab-span" style="white-space:pre">	</span>140 x 63 x 21.5mm (5.5 x 2.5 x 0.8")</p><p>- Weight&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :&nbsp;&nbsp;285g (10.1oz)</p><p>- Input&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;DC 5V/2A (Micro USB)</p><p>- Output&nbsp; &nbsp; &nbsp; &nbsp; :<span class="Apple-tab-span" style="white-space:pre">	</span>DC 5V / 1A (USB-A)</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DC 5V / 2.1A max (USB-A)</p><p>- Accessory&nbsp;&nbsp;&nbsp;&nbsp;:<span class="Apple-tab-span" style="white-space:pre">	</span>Micro USB cable , User Manual</p><p>- Warranty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<span class="Apple-tab-span" style="white-space:pre">	</span>1 year</p>',
                'option' => '{"lang":{"kh":"PT100 Power Bank"}}',
                'start_price' => 18.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["79706_1498015162.jpg","27745_1498015163.jpg","67405_1498015164.jpg","74810_1498015164.jpg","53122_1498015165.jpg","97775_1498015165.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 20:22:19',
                'updated_at' => '2017-06-20 20:22:19',
            ),
            31 => 
            array (
                'id' => 38,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'HD700 External SSD',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" width="647" align="left">Black/Yellow</td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 256GB</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 83.5 x 83.5 x 13.9 mm / 3.3 x 3.3 x 0.5"</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 75g / 2.6oz</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB 3.1 Gen 1</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Performance</td>
<td class="adata_table_line_x_h10" width="647" align="left">
: Read : Up to 440MB/s<br>
: Write : Up to 430MB/s<br>
*Performance may vary based on SSD capacity, hardware test 
platform, test software, operating system and other system variables.<br>
</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Operating system : requirements</td>
<td class="adata_table_line_x_h10" width="647" align="left">Windows XP/Vista/7/8/8.1/10<br>
Mac OS X 10.6 or later<br>
Linux Kernel 2.6 or later<br>
Android 5.0 or later</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Op. Temperature</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 5°C (41°F) to 50°C (122°F)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Op. Voltage</td>
<td class="adata_table_line_x_h10" width="647" align="left">: DC 5V, 900mA</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Accessories</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB 3.1 Gen 1 cable, Quick Start Guide</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 3 years</td></p>',
                'option' => '{"lang":{"kh":"HD700 External SSD"}}',
                'start_price' => 110.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["94084_1498015526.jpg","77300_1498015526.jpg","40621_1498015526.jpg","23212_1498015526.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 20:28:51',
                'updated_at' => '2017-06-20 20:28:51',
            ),
            32 => 
            array (
                'id' => 39,
                'category_id' => 18,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'PC500 Power Bank',
            'description' => '<p>- Capacity&nbsp; &nbsp; :<span class="Apple-tab-span" style="white-space:pre">	</span>5000mAh (Lithium-ion rechargeable battery 36Wh)</p><p>- Colors<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;Sky Blue / Pink</p><p>- Accessory&nbsp; : &nbsp;Micro USB Cable; User Manual</p><p>- Warranty&nbsp; &nbsp; : &nbsp;1 Year</p>',
                'option' => '{"lang":{"kh":"PC500 Power Bank"}}',
                'start_price' => 22.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["76316_1498015576.jpg","45927_1498015576.jpg","91765_1498015577.jpg","22434_1498015577.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 20:31:36',
                'updated_at' => '2017-06-20 20:31:36',
            ),
            33 => 
            array (
                'id' => 40,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'HV620 External SSD',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 240GB<br></td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Titanium</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 115 x 78 x 11.5mm / 4.5 x 3.0 x 0.4"</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Weight</td>
<td class="adata_table_line_x_h10" align="left">: 76g / 2.7oz</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Texture</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Plastic</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB 3.1,backward compatible with USB 2.0</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Performance</td>
<td class="adata_table_line_x_h10" width="647" align="left">
: Read : up to 440MB/s<br>
&nbsp;Write : up to 430MB/s<br>
*Performance may vary based on SSD capacity, hardware test 
platform, test software, operating system and other variables<br>
</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Operating system requirements</td>
<td class="adata_table_line_x_h10" align="left">
: Windows XP/Vista/7/8/8.1/10<br>&nbsp;
Mac OS X 10.6 or later<br>&nbsp;
Linux Kernel 2.6 or later<br>
</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Op. Temperature</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 5°C (41°F) to 50°C (121°F)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Operating voltage</td>
<td class="adata_table_line_x_h10" align="left">: DC 5V, 900mA</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Accessories</td>
<td class="adata_table_line_x_h10" align="left">: USB 3.1 cable; Quick Start Guide</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 3 years</td></p>',
                'option' => '{"lang":{"kh":"HV620 External SSD"}}',
                'start_price' => 95.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["44184_1498015867.jpg","70966_1498015867.jpg","83304_1498015867.jpg","51246_1498015867.jpg","71272_1498015867.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 20:34:19',
                'updated_at' => '2017-06-20 20:34:19',
            ),
            34 => 
            array (
                'id' => 41,
                'category_id' => 18,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'PV100 Power Bank',
            'description' => '<p>- Capacity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;<span class="Apple-tab-span" style="white-space:pre"></span>4200mAh (Lithium-ion rechargeable battery 36Wh)</p><p>- Colors<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;Black / White / Blue / Pink</p><p>- Accessory<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp; : &nbsp;Micro USB Cable; User Manual</p><p>- Warranty<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp; : &nbsp;1 Year</p>',
                'option' => '{"lang":{"kh":"PV100 Power Bank"}}',
                'start_price' => 18.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["41194_1498016049.jpg","77526_1498016050.jpg","21142_1498016050.jpg","81000_1498016050.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 20:36:56',
                'updated_at' => '2017-06-20 20:36:56',
            ),
            35 => 
            array (
                'id' => 42,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'SE730 External SSD',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 250GB</td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Gold/Red</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 72.7 x 44 x 12.2mm / 2.8 x 1.7 x 0.4"</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 33g (1.1oz)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB 3.1 Gen 2 Type-C</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Performance</td>
<td class="adata_table_line_x_h10" width="647" align="left">
: 250GB Performance (ATTO) :<br>
: Read : Up to 500MB/s<br>
: Write : Up to 450MB/s<br>
*Performance may vary based on SSD capacity, hardware test 
platform, test software, operating system and other system variables.<br>
</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Operating system requirements</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Windows XP/Vista/7/8/8.1/10<br>
&nbsp;Mac OS X 10.6 or later<br>
&nbsp;Linux Kernel 2.6 or later<br>
&nbsp;Android 5.0 or later</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Op. Temperature</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 5°C (41°F) to 50°C (122°F)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Op. Voltage</td>
<td class="adata_table_line_x_h10" width="647" align="left">: DC 5V, 900mA</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Accessories</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB 3.1 Gen 2 cable, Quick Start Guide</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 3 years</td></p>',
                'option' => '{"lang":{"kh":"SE730 External SSD"}}',
                'start_price' => 125.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["70334_1498016176.jpg","70148_1498016176.jpg","90572_1498016176.jpg","35442_1498016176.jpg","57449_1498016176.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 20:41:42',
                'updated_at' => '2017-06-20 20:41:42',
            ),
            36 => 
            array (
                'id' => 43,
                'category_id' => 33,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'External Hard Disk Box',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Color</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Red</td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Compatibility</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 7mm/9.5mm, HDD/SSD</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" align="left">: 125 x 90 x 17 mm / 4.5 x 3.5 x 0.6"</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" align="left">: 69g / 2.4oz</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- External Interface</td>
<td class="adata_table_line_x_h10" align="left">: SATA 3.0</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Internal Interface</td>
<td class="adata_table_line_x_h10" align="left">: USB 3.1, backward compatible with USB 2.0</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Controller</td>
<td class="adata_table_line_x_h10" align="left">: JMS578</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Operating system&nbsp; requirements</td>
<td class="adata_table_line_x_h10" align="left">: Windows XP/Vista/7/8/8.1/10<br>
&nbsp; Mac OS X 10.6 or later<br>
&nbsp; Linux Kernel 2.6 or later</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Operating Temperature</td>
<td class="adata_table_line_x_h10" align="left">: 5°C (41°F) to 50°C (122°F)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Accessories</td>
<td class="adata_table_line_x_h10" align="left">: USB 3.1 Gen 1 cable</td>
</tr>

<td class="adata_table_title13_bg_gray_line" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" align="left">: 1 year</td></p>',
                'option' => '{"lang":{"kh":"External Hard Disk Box"}}',
                'start_price' => NULL,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["72790_1498016715.jpg","36331_1498016715.jpg","70242_1498016715.jpg","86088_1498016714.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 20:47:50',
                'updated_at' => '2017-06-20 20:47:50',
            ),
            37 => 
            array (
                'id' => 44,
                'category_id' => 18,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'P12500 Power Bank',
            'description' => '<p>- Capacity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;: &nbsp;12500mAh (Rechargeable Lithium-ion battery 45Wh)</p><p>- Colors<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;: &nbsp;Black/White</p><p>- Dimensions&nbsp; &nbsp; :&nbsp; (L x W x H)<span class="Apple-tab-span" style="white-space:pre">	</span>141 x 63.5 x 22.5 mm / 5.5 x 2.5 x 0.9 in</p><p>- Weight<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;295g / 10.4oz</p><p>- Input<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;DC 5V/2A (Micro USB)</p><p>- Output&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<span class="Apple-tab-span" style="white-space:pre">	</span>DC 5V/2.1A max. (Type-A USB)</p><p>- Accessory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<span class="Apple-tab-span" style="white-space:pre">	</span>Micro USB Cable; User Manual</p><p>- Warranty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<span class="Apple-tab-span" style="white-space:pre">	</span>1 year</p>',
                'option' => '{"lang":{"kh":"P12500 Power Bank"}}',
                'start_price' => 23.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["19900_1498017554.jpg","30142_1498017554.jpg","21209_1498017555.jpg","25888_1498017555.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 21:01:18',
                'updated_at' => '2017-06-20 21:01:18',
            ),
            38 => 
            array (
                'id' => 45,
                'category_id' => 31,
                'brand_id' => 2,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'GA-H97M-Gaming 3',
                'description' => NULL,
                'option' => '{"lang":{"kh":"GA-H97M-Gaming 3"}}',
                'start_price' => 139.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["36542_1498018410.jpg","22809_1498018409.jpg","20445_1498018410.jpg","85809_1498018410.jpg","82577_1498018410.jpg","34210_1498018410.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 21:14:00',
                'updated_at' => '2017-06-20 21:14:00',
            ),
            39 => 
            array (
                'id' => 46,
                'category_id' => 40,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'RC300  Car Camera',
            'description' => '<p>- Sensor<span class="Apple-tab-span" style="white-space:pre">	</span> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;1/3” CMOS</p><p>- Resolution<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;:&nbsp;3 Mega-pixel</p><p>- Display<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;2.0” LCD</p><p>- Controller IC<span class="Apple-tab-span" style="white-space:pre">	</span>Novatek96650</p><p>Storage<span class="Apple-tab-span" style="white-space:pre">	</span> microSD card (Max.128GB)</p><p>Camera Lens<span class="Apple-tab-span" style="white-space:pre">	</span>6G+1</p><p>View Angle<span class="Apple-tab-span" style="white-space:pre">	</span>140°</p><p>Aperture<span class="Apple-tab-span" style="white-space:pre">	</span>F/2.0</p><p>Video Format<span class="Apple-tab-span" style="white-space:pre">	</span>MOV(H.264)</p><p>1080FHD(1920x1080) / 720P(1280x720) / WVGA(848x480P) / VGA(640x480)</p><p>Image Format<span class="Apple-tab-span" style="white-space:pre">	</span>JPEG</p><p>12M(4032x3024) / 10M(3648x2736) / 8M(3264x2448) / 5M(2592x1944) / 3M(2048x1536) / 2MHD(1920x1080) / VGA(640x480) / 1.3M(1280x960)</p><p>Audio<span class="Apple-tab-span" style="white-space:pre">	</span>Built-in MIC / Speaker</p><p>Loop Recording<span class="Apple-tab-span" style="white-space:pre">	</span>OFF / 1 / 3 / 5 minutes</p><p>USB<span class="Apple-tab-span" style="white-space:pre">	</span>USB2.0（High-Speed)</p><p>Video Out<span class="Apple-tab-span" style="white-space:pre">	</span>AV out (NTSC/PAL)</p><p>HDMI out (Max. 1920x1080 P50 or 1920x1080 P60)</p><p>Battery<span class="Apple-tab-span" style="white-space:pre">	</span>Built-in 300mAh±10mAh Battery</p><p>Power Supply<span class="Apple-tab-span" style="white-space:pre">	</span>Input DC 12V/24V</p><p>Output DC 5V, 1A</p><p>Operating Temp.<span class="Apple-tab-span" style="white-space:pre">	</span>-20°C(-4°F)-70°C(158°F)</p><p>Dimension<span class="Apple-tab-span" style="white-space:pre">	</span>64 x 54 x 30 mm</p><p>Weight<span class="Apple-tab-span" style="white-space:pre">	</span>50g</p><p>Certification<span class="Apple-tab-span" style="white-space:pre">	</span>CE, FCC, BSMI</p><p>Warranty<span class="Apple-tab-span" style="white-space:pre">	</span>1 year</p>',
                'option' => '{"lang":{"kh":"RC300 Car Camera"}}',
                'start_price' => 85.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["63817_1498018364.jpg","83602_1498018365.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-20 21:14:43',
                'updated_at' => '2017-06-20 21:14:43',
            ),
            40 => 
            array (
                'id' => 47,
                'category_id' => 8,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'SX930 SSD HDD',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 120GB<br></td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Form Factor</td>
<td class="adata_table_line_x_h10" align="left">: 2.5"</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- NAND Flash</td>
<td class="adata_table_line_x_h10" align="left">: Synchronous MLC Plus</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Controller</td>
<td class="adata_table_line_x_h10" align="left">: JMicron JMF670H&nbsp;</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)&nbsp;</td>
<td class="adata_table_line_x_h10" align="left">: 100.45 x 69.85 x 7mm</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" align="left">: 58g</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" align="left">: SATA 6Gb/s</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Performance(Max)</td>
<td class="adata_table_line_x_h10" align="left"><br>
120GB Performance (ATTO)<br>
Read: Up to 560MB/s<br>
Write: Up to 460MB/s<br>
*Performance may vary based on SSD capacity, hardware test 
platform, test software, operating system and other system variables.&nbsp;<br>
&nbsp;</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Operating temperature</td>
<td class="adata_table_line_0_h10" align="left">: 0~70°C</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Storage temperature</td>
<td class="adata_table_line_0_h10" align="left">: -40~85°C</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Shock resistance</td>
<td class="adata_table_line_0_h10" align="left">: 1500G/0.5ms&nbsp;</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- MTBF</td>
<td class="adata_table_line_0_h10" align="left">: 1,500,000 hours&nbsp;&nbsp;</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Accessories</td>
<td class="adata_table_line_0_h10" align="left">
: 2.5” to 3.5” Bracket<br>
: 7mm to 9.5mm holder<br>
: Acronis ATI HD 2013<br>
</td>
</tr>

<td class="adata_table_title13_bg_gray_line" align="left">- Warranty</td>
<td class="adata_table_line_0_h10" align="left">
<span style="font-size: smaller">: 5 years<br>
</span><span style="font-size: x-small">&nbsp;5 years</span></td></p>',
                'option' => '{"lang":{"kh":"SX930 SSD HDD"}}',
                'start_price' => 75.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["97758_1498101055.jpg","94778_1498101055.jpg","25508_1498101055.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-21 20:14:22',
                'updated_at' => '2017-06-21 20:14:22',
            ),
            41 => 
            array (
                'id' => 48,
                'category_id' => 8,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'SU800 SSD HDD',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 256GB<br></td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Form Factor</td>
<td class="adata_table_line_x_h10" align="left">: 2.5"</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- NAND Flash</td>
<td class="adata_table_line_x_h10" align="left">: 3D TLC</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Controller</td>
<td class="adata_table_line_x_h10" align="left">: SMI</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)&nbsp;</td>
<td class="adata_table_line_x_h10" align="left">: 100.45 x 69.85 x 7mm</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" align="left">: 47.5g</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" align="left">: SATA 6Gb/s</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Sequential R/W - performance (max)</td>
<td class="adata_table_line_x_h10" align="left">: Up to 560/520MB/s<br>
*Actual performance may vary due to available SSD capacity, 
system hardware and software components, and other factors</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Operating temperature</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: 0°C-70°C</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Storage temperature</td>
<td class="adata_table_line_x_h10" align="left">: -40°C-85°C</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- Shock resistance</td>
<td class="adata_table_line_x_h10" align="left">: 1500G/0.5ms</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" align="left">- MTBF</td>
<td class="adata_table_line_x_h10" align="left">: 2,000,000 hours</td>
</tr>

<td class="adata_table_title13_bg_gray_line" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" align="left">: 3 years</td></p>',
                'option' => '{"lang":{"kh":"SU800 SSD HDD"}}',
                'start_price' => 105.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["51541_1498101384.jpg","53254_1498101384.jpg","33923_1498101383.jpg","33208_1498101383.jpg","74445_1498101384.jpg","40584_1498101384.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-21 20:21:28',
                'updated_at' => '2017-06-21 20:21:28',
            ),
            42 => 
            array (
                'id' => 49,
                'category_id' => 15,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'Micro USB cable',
                'description' => '<p>- Colors&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : <span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;Black、Blue、Purple、Red、Gold、Silver、Rose Gold</p><p>- Length<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;100cm</p><p>- Weight<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;19.5g</p><p>- Interface&nbsp; &nbsp; : &nbsp;Micro USB and USB type A</p><p>- Warranty &nbsp; &nbsp;: &nbsp;1 Year</p>',
                'option' => '{"lang":{"kh":"Micro USB cable"}}',
                'start_price' => 5.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["42297_1498101613.jpg","88854_1498101614.jpg","19998_1498101614.jpg","53785_1498101615.jpg","79866_1498101615.jpg","66293_1498101616.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-21 20:23:20',
                'updated_at' => '2017-06-21 20:23:20',
            ),
            43 => 
            array (
                'id' => 50,
                'category_id' => 8,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'SP920 SSD HDD',
                'description' => '<p>








<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 128GB/256GB/512GB/1TB</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Form Factor</td>
<td class="adata_table_line_x_h10" align="left">: 2.5 inch</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- NAND Flash</td>
<td class="adata_table_line_x_h10" align="left">: Synchronous MLC</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Controller</td>
<td class="adata_table_line_x_h10" align="left">: Marvell</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" align="left">: 100.45 x 69.85 x 7mm</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Weight</td>
<td class="adata_table_line_x_h10" align="left">: 28GB/256GB 38g ; 512G/1TB 68g</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" align="left">: SATA 6Gb/sec&nbsp;</td>
</tr>

<td class="adata_table_title13_bg_gray_line" align="left">
- Performance<br>
</td>
<td class="adata_table_line_x_h10" align="left">
<br>
<span style="text-indent: 2pt">128GB Performance (ATTO) :<br>
</span>Read : Up to 540MB/s<br>
Write : Up to 160MB/s</td></p><p><td class="adata_table_line_x_h10" align="left">- Warranty &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 3 Years<br></td></p>',
                'option' => '{"lang":{"kh":"SP920 SSD HDD"}}',
                'start_price' => 80.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["24929_1498101737.jpg","44886_1498101737.jpg","50308_1498101737.jpg","21638_1498101737.jpg","85460_1498101737.jpg","15140_1498101737.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-21 20:28:17',
                'updated_at' => '2017-06-21 20:28:17',
            ),
            44 => 
            array (
                'id' => 51,
                'category_id' => 15,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'Lightning Cable',
            'description' => '<p>- Interface&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<span class="Apple-tab-span" style="white-space:pre">	</span> Lightning and USB / 2-in-1: Lightning, microUSB, USB</p><p>- Length<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 100cm</p><p>- Weight<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;(TPE)18g / (Aluminum-casing)19.5g / (2-in-1)17.5g</p><p>- Warranty<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; 1 Year</p>',
                'option' => '{"lang":{"kh":"Lightning Cable"}}',
                'start_price' => 8.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["70057_1498102109.jpg","57801_1498102109.jpg","19789_1498102110.jpg","38103_1498102110.jpg","65660_1498102111.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-21 20:32:51',
                'updated_at' => '2017-06-21 20:32:51',
            ),
            45 => 
            array (
                'id' => 52,
                'category_id' => 15,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'USB-C 2.0 Cable',
                'description' => '<p>- Interface<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp; &nbsp; : &nbsp;USB-C 2.0</p><p>- Colors&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;White</p><p>- Length<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;100cm</p><p>- Texture<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;Aluminum-Casing+Plastic</p><p>- Performance&nbsp; &nbsp;: &nbsp;480Mbps</p><p>- Warranty<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;1 year</p>',
                'option' => '{"lang":{"kh":"USB-C 2.0 Cable"}}',
                'start_price' => 12.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["36784_1498102694.jpg","84847_1498102694.jpg","75901_1498102694.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-21 20:40:16',
                'updated_at' => '2017-06-21 20:40:16',
            ),
            46 => 
            array (
                'id' => 53,
                'category_id' => 4,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'DDR4 2400MHz RAM',
                'description' => '<p>- Module Type
: U-DIMM<br>- Form Factor
: standard 1.23" height<br>


- Memory Type
: DDR4<br>


- Standard
: JEDEC<br>


- Interface
: 288-pin


<br>- Density
: 8GB<br>


- Speed
: 2400MHz<br>


- Power supply
: VDD and VDDQ = 1.2V±0.06V


<br>- DRAM activation power <br>- supply
&nbsp;: VPP= 2.5V (+0.25V / -0.125V)<br>


- DRAM spec/VCC
: DDR4 STD 1.2V<br>


- Operating temperature
: 0°C to 85°C


<br>- Warranty
: Lifetime</p>',
                'option' => '{"lang":{"kh":"DDR4 2400MHz RAM"}}',
                'start_price' => 68.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["52742_1498102908.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-21 20:42:09',
                'updated_at' => '2017-06-21 20:44:08',
            ),
            47 => 
            array (
                'id' => 54,
                'category_id' => 15,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'USB-C 3.1 Cable',
                'description' => '<p>- Interface<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp; &nbsp; : &nbsp;USB-C 3.1</p><p>- Colors<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;White</p><p>- Length<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;100cm</p><p>- Texture&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; :<span class="Apple-tab-span" style="white-space:pre">	</span>Aluminum-Casing+Plastic</p><p>- Performance&nbsp; &nbsp;: &nbsp;5Gbps</p><p>- Warranty<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp; &nbsp; : &nbsp;1 year</p>',
                'option' => '{"lang":{"kh":"USB-C 3.1 Cable"}}',
                'start_price' => 13.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["92754_1498102928.jpg","89061_1498102928.jpg","59454_1498102928.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-21 20:43:47',
                'updated_at' => '2017-06-21 20:43:47',
            ),
            48 => 
            array (
                'id' => 55,
                'category_id' => 15,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'USB-C HUB',
            'description' => '<p>- Interface<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp; &nbsp; : &nbsp;USB-C, USB-A 3.1 and HDMI</p><p>- Colors<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;White</p><p>- Dimensions (L x W x H)<span class="Apple-tab-span" style="white-space:pre">	</span>:&nbsp;158 x 60 x 12 mm</p><p>- Texture<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : &nbsp;Plastic</p><p>- Performance&nbsp; : &nbsp;5Gbps</p><p>- Warranty<span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp; &nbsp; : &nbsp;1 year</p>',
                'option' => '{"lang":{"kh":"USB-C HUB"}}',
                'start_price' => 45.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["13352_1498103229.jpg","46574_1498103229.jpg","22651_1498103229.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-21 20:50:09',
                'updated_at' => '2017-06-21 20:50:09',
            ),
            49 => 
            array (
                'id' => 56,
                'category_id' => 4,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'DDR4 2133MHz RAM',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Suitable for</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Desktop PC</td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Module Specification</td>
<td class="adata_table_line_x_h10" align="left">: 288 Pin Unbuffered-DIMM</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Density</td>
<td class="adata_table_line_x_h10" align="left">: 4GB<br></td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Power Supply</td>
<td class="adata_table_line_x_h10" align="left">: VDD&amp;VDDQ=1.2V +0.06/- 0.06V</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- DRAM Activation Power - Supply</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: VPP= 2.5V (2.375V min , 2.75 max)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">&nbsp;&nbsp; DRAM Spec/VCC</td>
<td class="adata_table_line_x_h10" align="left">: DDR4 STD 1.2V</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Operating Temperature</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: 0°C to +85°C</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" align="left">: Limited Lifetime Warranty</td></p>',
                'option' => '{"lang":{"kh":"DDR4 2133MHz RAM"}}',
                'start_price' => 38.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["55392_1498103318.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-21 20:51:26',
                'updated_at' => '2017-06-21 20:51:26',
            ),
            50 => 
            array (
                'id' => 57,
                'category_id' => 15,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'USB-C TO HDMI ADAPTER',
                'description' => '<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" width="647" align="left">: USB-C and HDMI</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Colors</td>
<td class="adata_table_line_x_h10" width="647" align="left">: White</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Dimensions (L x W x H)</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 149 x W 25.5 x 12.6 mm</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Texture</td>
<td class="adata_table_line_x_h10" width="647" align="left">: Plastic</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Pixel</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 4K UltraHD</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" width="647" align="left">: 1 year</td>',
                'option' => '{"lang":{"kh":"USB-C TO HDMI ADAPTER"}}',
                'start_price' => 30.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["93278_1498103873.jpg","38442_1498103873.jpg","73287_1498103873.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-21 21:06:05',
                'updated_at' => '2017-06-21 21:09:42',
            ),
            51 => 
            array (
                'id' => 58,
                'category_id' => 4,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'DDR4 2400MHz RAM',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Module Type</td>
<td class="adata_table_line_x_h10" width="647" align="left">: SO-DIMM</td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Form Factor</td>
<td class="adata_table_line_x_h10" align="left">: standard 1.18" height</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Memory Type</td>
<td class="adata_table_line_x_h10" align="left">: DDR4</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Standard</td>
<td class="adata_table_line_x_h10" align="left">: JEDEC</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" align="left">: 260-pin</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Density</td>
<td class="adata_table_line_x_h10" align="left">: 4GB / 8GB / 16GB</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Speed</td>
<td class="adata_table_line_x_h10" align="left">: 2400MHz</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Power supply</td>
<td class="adata_table_line_x_h10" align="left">: VDD and VDDQ = 1.2V±0.06V</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- DRAM activation power&nbsp; supply</td>
<td class="adata_table_line_x_h10" align="left">: VPP= 2.5V (+0.25V / -0.125V)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- DRAM spec/VCC</td>
<td class="adata_table_line_x_h10" align="left">: DDR4 STD 1.2V</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Operating temperature</td>
<td class="adata_table_line_x_h10" align="left">: 0°C to 85°C</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" align="left">: Lifetime</td></p>',
                'option' => '{"lang":{"kh":"DDR4 2400MHz RAM"}}',
                'start_price' => 69.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["83529_1498104231.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-21 21:06:42',
                'updated_at' => '2017-06-21 21:06:42',
            ),
            52 => 
            array (
                'id' => 59,
                'category_id' => 4,
                'brand_id' => 1,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'DDR4 2133MHz RAM',
                'description' => '<p><td class="adata_table_title13_bg_gray_line" width="171" align="left">- Module Type</td>
<td class="adata_table_line_x_h10" width="647" align="left">: SO-DIMM</td>

<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Form Factor</td>
<td class="adata_table_line_x_h10" align="left">: standard 1.18" height</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Memory Type</td>
<td class="adata_table_line_x_h10" align="left">: DDR4</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Standard</td>
<td class="adata_table_line_x_h10" align="left">: JEDEC</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Interface</td>
<td class="adata_table_line_x_h10" align="left">: 260-pin</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Capacity</td>
<td class="adata_table_line_x_h10" align="left">: 4GB / 8GB</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Speed</td>
<td class="adata_table_line_x_h10" align="left">: 2133MHz</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Power Supply</td>
<td class="adata_table_line_x_h10" align="left">: VDD &amp; VDDQ = 1.2V±0.06V</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- DRAM Activation Power Supply</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: VPP= 2.5V (+0.25V / -0.125V)</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- DRAM Spec/VCC</td>
<td class="adata_table_line_x_h10" align="left">: DDR4 STD 1.2V</td>
</tr>
<tr>
<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Operation Temperature</td>
<td class="adata_table_line_x_h10" align="left">&nbsp;: 0°C to 85°C</td>
</tr>

<td class="adata_table_title13_bg_gray_line" width="171" align="left">- Warranty</td>
<td class="adata_table_line_x_h10" align="left">: limited lifetime warranty</td></p>',
                'option' => '{"lang":{"kh":"DDR4 2133MHz RAM"}}',
                'start_price' => 38.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["75524_1498104724.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-21 21:14:05',
                'updated_at' => '2017-06-21 21:14:05',
            ),
            53 => 
            array (
                'id' => 60,
                'category_id' => 5,
                'brand_id' => 2,
                'code' => NULL,
                'url_detail' => '#',
                'title' => 'GTX 1060 G1 Gaming',
                'description' => '<div class="sp-section Specification-section">
<ul class="display-table"><li class="display-table-row black">
<div class="display-table-cell item">Process Technology &nbsp;&nbsp; : 16 nm
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Memory Clock &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 8008 MHz
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Memory Size &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : 6 GB
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Memory Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : GDDR5
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Memory Bus&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 192 bit
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Card Bus &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : PCI-E 3.0 x 16
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Output</div>
<div class="display-table-cell">&nbsp;&nbsp;&nbsp;&nbsp; <br></div></li></ul>
</div>',
                'option' => '{"lang":{"kh":"GTX 1060 G1 Gaming"}}',
                'start_price' => 0.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["80033_1498187466.jpg","25065_1498187466.jpg","15687_1498187467.jpg","24045_1498187466.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-22 20:18:52',
                'updated_at' => '2017-07-19 01:16:55',
            ),
            54 => 
            array (
                'id' => 61,
                'category_id' => 5,
                'brand_id' => 2,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'GTX 1070 G1 Gaming',
                'description' => '<div class="sp-section Specification-section">
<ul class="display-table"><li class="display-table-row black">
<div class="display-table-cell item">Graphics Processing : GeForce® GTX 1070
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Core Clock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp; Boost: 1822 MHz/ Base: 1620 MHz in OC Mode<br></div><div class="display-table-cell">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Boost: 1784 MHz/ Base: 1594 MHz in Gaming Mode</div>
</li><li class="display-table-row black">
<div class="display-table-cell item">Process Technology : 16 nm
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Memory Clock : 8008 MHz
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Memory Size : 8 GB
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Memory Type : GDDR5
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Memory Bus : 256 bit
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Card Bus : PCI-E 3.0 x 16
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Output</div>
<div class="display-table-cell">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dual-link DVI-D *1 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HDMI-2.0b*1 (Max Resolution:  4096x2160 @60 Hz)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Display Port-1.4 *3 (Max Resolution: 7680x4320  @60 Hz)</div>
</li><li class="display-table-row black">
<div class="display-table-cell item">Digital max resolution : 7680x4320
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Multi-view : 4
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Card size : H=41 L=280 W=114 mm
</div></li><li class="display-table-row black">
<div class="display-table-cell item">PCB Form : ATX
</div></li><li class="display-table-row black">
<div class="display-table-cell item">DirectX : 12
</div></li><li class="display-table-row black">
<div class="display-table-cell item">OpenGL : 4.5
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Recommended PSU : 500W
</div></li><li class="display-table-row black">
<div class="display-table-cell item">Power Connectors : 8 pin*1
</div></li><li class="display-table-row black">
<div class="display-table-cell item">SLI support : 2-way SLI HB
</div></li></ul>
</div>',
                'option' => '{"lang":{"kh":"GTX 1070 G1 Gaming"}}',
                'start_price' => 0.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["89280_1498187989.jpg","97380_1498187989.jpg","62456_1498187989.jpg","96407_1498187989.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-22 20:28:04',
                'updated_at' => '2017-06-22 20:28:04',
            ),
            55 => 
            array (
                'id' => 62,
                'category_id' => 5,
                'brand_id' => 2,
                'code' => NULL,
                'url_detail' => NULL,
                'title' => 'GTX 1080 G1 Gaming',
            'description' => '<div class="section-right"><span style="background-color: inherit;"></span><span style="background-color: inherit;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Powered by GeForce® GTX 1080</span><br><div class="summary"><span style="background-color: inherit;"></span><span style="background-color: inherit;"></span><span style="background-color: inherit;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; - Integrated with 8GB GDDR5X  256bit memory  </span><br><span style="background-color: inherit;"></span><span style="background-color: inherit;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; - WINDFORCE 3X with Blade Fan Design </span><br><span style="background-color: inherit;"></span><span style="background-color: inherit;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Support up to 8K display @60Hz (requires 2*DP1.3 connectors) </span><br><span style="background-color: inherit;"></span><span style="background-color: inherit;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - 16.8M Customizable Color </span><span style="background-color: inherit;"><span style="color:#ff3300; font-size:20px;"></span></span><br><span style="background-color: inherit;"></span><span style="background-color: inherit;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Boost: 1860 MHz / Base: 1721 MHz  in OC mode</span><br><span style="background-color: inherit;"></span><span style="background-color: inherit;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Boost: 1835 MHz / Base: 1695 MHz  in Gaming mode</span></div></div>',
                'option' => '{"lang":{"kh":"GTX 1080 G1 Gaming"}}',
                'start_price' => 0.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["12338_1498188974.jpg","91119_1498188974.jpg","14954_1498188975.jpg","99792_1498188974.jpg","32125_1498188974.jpg","78647_1498188974.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-22 20:36:25',
                'updated_at' => '2017-07-19 01:18:05',
            ),
            56 => 
            array (
                'id' => 63,
                'category_id' => 12,
                'brand_id' => 10,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'Case 303',
                'description' => NULL,
                'option' => '{"lang":{"kh":"\\u1798\\u17c9\\u17bc\\u178a\\u17c2\\u179b 303"}}',
                'start_price' => 175.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["97965_1498530952.jpg","14643_1498530952.jpg","68667_1498530952.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-26 19:35:59',
                'updated_at' => '2017-06-26 19:35:59',
            ),
            57 => 
            array (
                'id' => 64,
                'category_id' => 12,
                'brand_id' => 10,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'Case 503',
                'description' => NULL,
                'option' => '{"lang":{"kh":"\\u1798\\u17c9\\u17bc\\u178a\\u17c2\\u179b 503"}}',
                'start_price' => 125.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["59374_1498531005.jpg","39921_1498531005.jpg","25455_1498531005.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-26 19:38:04',
                'updated_at' => '2017-06-26 19:38:04',
            ),
            58 => 
            array (
                'id' => 66,
                'category_id' => 12,
                'brand_id' => 10,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'Case GT1',
                'description' => NULL,
                'option' => '{"lang":{"kh":"\\u1798\\u17c9\\u17bc\\u178a\\u17c2\\u179b GT1"}}',
                'start_price' => 117.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["17239_1498531344.jpg","92260_1498531344.jpg","81583_1498531344.jpg","58913_1498531343.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-26 19:42:27',
                'updated_at' => '2017-06-26 19:42:27',
            ),
            59 => 
            array (
                'id' => 68,
                'category_id' => 12,
                'brand_id' => 10,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'Case 509',
                'description' => NULL,
                'option' => '{"lang":{"kh":"\\u1798\\u17c9\\u17bc\\u178a\\u17c2\\u179b 509"}}',
                'start_price' => 235.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["35372_1498531553.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-26 19:46:01',
                'updated_at' => '2017-06-26 19:46:01',
            ),
            60 => 
            array (
                'id' => 69,
                'category_id' => 9,
                'brand_id' => 10,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'C 750W',
                'description' => '<th>Model</th>
<td class="border_right">C 750W</td>
<td class="main_model"><br></td>

<tr>
<th>Total Power</th>
<td class="border_right">750W</td>
<td class="main_model"><br></td>
</tr>
<tr>
<th>Material</th>
<td colspan="2">Aluminium, SECC</td>
</tr>
<tr>
<th>Type</th>
<td colspan="2">ATX12V V2.4/<br>
EPS12V V2.92</td>
</tr>
<tr>
<th>Cable Management</th>
<td colspan="2">Fully Modular</td>
</tr>
<tr>
<th>PFC</th>
<td colspan="2">Active PFC ( &gt; 0.9)</td>
</tr>
<tr>
<th>80 PLUS</th>
<td colspan="2">Platinum (up to 92%)</td>
</tr>
<tr>
<th>MTBF (Hours)</th>
<td colspan="2">&gt; 100,000hr</td>
</tr>
<tr>
<th>AC Input</th>
<td colspan="2">100 - 240Vac. 50 - 60Hz</td>
</tr>
<tr>
<th>Hold-up time (ms)</th>
<td colspan="2">&gt;16ms</td>
</tr>
<tr>
<th>Fan</th>
<td colspan="2">120mm Hypro Bearing Fan</td>
</tr>
<tr>
<th>Typical Fan Noise (dB)</th>
<td colspan="2">&lt; 25dB</td>
</tr>
<tr>
<th>Operating Temperature Range (°C)</th>
<td colspan="2">0~50 °C</td>
</tr>
<tr>
<th>Full Protection</th>
<td colspan="2">OCP/ OVP / UVP / SCP / OTP / OPP</td>
</tr>
<tr>
<th>Safety Certifications</th>
<td colspan="2">cTUVus / TUV / CB / BSMI / CE / FCC / EAC / RCM / CCC</td>
</tr>
<tr>
<th>Dimensions<br>
(L x W x D)</th>
<td colspan="2">165 x 150 x 86mm</td>
</tr>
<tr>
<th>Package Dimensions<br>
(L x W x D)</th>
<td colspan="2">225 x 350 x 135mm</td>
</tr>
<tr>
<th>Net Weight</th>
<td colspan="2">3.0kg</td>
</tr>
<tr>
<th>Gross Weight</th>
<td colspan="2">3.5kg</td>
</tr>
<tr>
<th>Warranty</th>
<td colspan="2">2 Years</td>
</tr>
<tr class="border_top">
<th rowspan="6">Connector</th>
<th>24 Pin Motherboard</th>
<td>1</td>
</tr>
<tr>
<th>8 (4+4) Pin CPU</th>
<td>2</td>
</tr>
<tr>
<th>8 (6+2) Pin PCI-E</th>
<td>4</td>
</tr>
<tr>
<th>4 Pin Peripheral</th>
<td>6</td>
</tr>
<tr>
<th>SATA</th>
<td>6</td>
</tr>

<th>Floppy</th>
<td>2</td>',
                'option' => '{"lang":{"kh":null}}',
                'start_price' => 80.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["56629_1498531844.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-26 19:51:00',
                'updated_at' => '2017-06-26 20:16:12',
            ),
            61 => 
            array (
                'id' => 70,
                'category_id' => 9,
                'brand_id' => 10,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'C 900W',
                'description' => '<th>Model</th>
<td class="border_right">C 900W</td>
<td class="main_model"><br></td>

<tr>
<th>Total Power</th>
<td class="border_right">900W</td>
<td class="main_model"><br></td>
</tr>
<tr>
<th>Material</th>
<td colspan="2">Aluminium, SECC</td>
</tr>
<tr>
<th>Type</th>
<td colspan="2">ATX12V V2.4/<br>
EPS12V V2.92</td>
</tr>
<tr>
<th>Cable Management</th>
<td colspan="2">Fully Modular</td>
</tr>
<tr>
<th>PFC</th>
<td colspan="2">Active PFC ( &gt; 0.9)</td>
</tr>
<tr>
<th>80 PLUS</th>
<td colspan="2">Platinum (up to 92%)</td>
</tr>
<tr>
<th>MTBF (Hours)</th>
<td colspan="2">&gt; 100,000hr</td>
</tr>
<tr>
<th>AC Input</th>
<td colspan="2">100 - 240Vac. 50 - 60Hz</td>
</tr>
<tr>
<th>Hold-up time (ms)</th>
<td colspan="2">&gt;16ms</td>
</tr>
<tr>
<th>Fan</th>
<td colspan="2">120mm Hypro Bearing Fan</td>
</tr>
<tr>
<th>Typical Fan Noise (dB)</th>
<td colspan="2">&lt; 25dB</td>
</tr>
<tr>
<th>Operating Temperature Range (°C)</th>
<td colspan="2">0~50 °C</td>
</tr>
<tr>
<th>Full Protection</th>
<td colspan="2">OCP/ OVP / UVP / SCP / OTP / OPP</td>
</tr>
<tr>
<th>Safety Certifications</th>
<td colspan="2">cTUVus / TUV / CB / BSMI / CE / FCC / EAC / RCM / CCC</td>
</tr>
<tr>
<th>Dimensions<br>
(L x W x D)</th>
<td colspan="2">165 x 150 x 86mm</td>
</tr>
<tr>
<th>Package Dimensions<br>
(L x W x D)</th>
<td colspan="2">225 x 350 x 135mm</td>
</tr>
<tr>
<th>Net Weight</th>
<td colspan="2">3.0kg</td>
</tr>
<tr>
<th>Gross Weight</th>
<td colspan="2">3.5kg</td>
</tr>
<tr>
<th>Warranty</th>
<td colspan="2">2 Years</td>
</tr>
<tr class="border_top">
<th rowspan="6">Connector</th>
<th>24 Pin Motherboard</th>
<td>1</td>
</tr>
<tr>
<th>8 (4+4) Pin CPU</th>
<td>2</td>
</tr>
<tr>
<th>8 (6+2) Pin PCI-E</th>
<td>4</td>
</tr>
<tr>
<th>4 Pin Peripheral</th>
<td>6</td>
</tr>
<tr>
<th>SATA</th>
<td>6</td>
</tr>

<th>Floppy</th>
<td>2</td>',
                'option' => '{"lang":{"kh":null}}',
                'start_price' => 235.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["37787_1498531932.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-26 19:55:38',
                'updated_at' => '2017-06-26 20:15:37',
            ),
            62 => 
            array (
                'id' => 71,
                'category_id' => 41,
                'brand_id' => 2,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'GB-BACE-3150',
            'description' => '<p>- Intel® Celeron® Processor N3150 up to 2.08GHz1<br>- Ram 4G<br>- HDD 500G<br>- VGA Resolution 1920 x 1200 @60 Hz<br>- HDMI Resolution 3840x2160 @ 30 Hz<br>- 1 x PCIe M.2 NGFF 2230 A-E key slot occupied by the WiFi+BT card<br>- 1 x VGA , 1 x HDMI , 2 x USB 3.0 , 1 x RJ45 , 1 x DC-In , 1 x Kensington lockslot , 1 x headset phone jack , 1 x Mic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; phone jack<br>- Supports 2.5” thickness 7.0/9.5mm Hard Drives (1 x 6Gbps SATA3)<br>- Input: AC 100-240V Output: DC 19V/2.1A<br>- Bracket included Supports 75 x 75 and 100 x 100 mm<br>- WIN7 64bit , WIN8.1 64bit , WIN10 64bit<br></p>',
                'option' => '{"lang":{"kh":"\\u1798\\u17c9\\u17bc\\u178a\\u17c2\\u179b GB-BACE-3150"}}',
                'start_price' => 245.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["83411_1498532367.jpg","88596_1498532367.jpg","86303_1498532367.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-26 20:09:09',
                'updated_at' => '2017-06-26 20:09:09',
            ),
            63 => 
            array (
                'id' => 72,
                'category_id' => 41,
                'brand_id' => 2,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'GB-BSi3H- 6100',
            'description' => '<p>- Intel® Core™ i3-6100U 2.3GHz<br>- Ram 4G<br>- HDD 500G<br>- Gigabit LAN (Intel i219V) / Audio<br>- Mini DP Resolution 3840 x 2160 @ 60Hz<br>- HDMI Resolution 4096 x 2160 @ 24Hz<br>- 1 x M.2 slot (2280_storage)<br>- 1 x PCIe M.2 NGFF 2230 A-E key slot occupied by the WiFi+BT card<br>- 4 x USB 3.0 , 1 x head phone Jack , 1 x Mic phone Jack<br>- 1 x HDMI (1.4a) , 1 x Mini DisplayPort (1.2) , 1 x RJ45 , 1 x DC-In1 x lock slot<br>- Input: AC 100-240V Output: DC 19V/3.42A<br>- Bracket included Supports 75 x 75 and 100 x 100 mm<br>- Intel® Dual Band Wireless-AC 3165<br>- Supports 2.5” HDD/SSD, 7.0/9.5 mm thick (1 x 6 Gbps SATA 3)<br>- WIN7 32/64bit , WIN8.1 64bit , WIN10 64bit<br></p>',
                'option' => '{"lang":{"kh":null}}',
                'start_price' => 405.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["48683_1498533449.jpg","97218_1498533449.jpg","92296_1498533449.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-26 20:21:08',
                'updated_at' => '2017-06-26 20:21:08',
            ),
            64 => 
            array (
                'id' => 73,
                'category_id' => 41,
                'brand_id' => 2,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'GB-BSi5H-6200',
            'description' => '<p>- Intel® Core™ i5-6200U 2.3GHz ~ 2.8GHz<br>- Ram 4G<br>- HDD 500G<br>- Mini DP Resolution 3840 x 2160 @ 60Hz<br>- HDMI Resolution 4096 x 2160 @ 24Hz<br>- 1 x M.2 slot (2280_storage) PCIe /SATA<br>- 1 x PCIe M.2 NGFF 2230 A-E key slot occupied by the WiFi+BT card<br>- 2 x USB 3.0 , 1 x USB3.1 , 1 x USB 3.1 type C<br>- 1 x head phone jack with MIC<br>- 1 x HDMI , 1 x Mini DisplayPort , 1 x RJ45 , 1 x DC-In , 1 x lock slot<br>- Input: AC 100-240V , Output: DC 19V/3.42A<br>- Bracket included Supports 75 x 75 and 100 x 100 mm<br>- Intel® Dual Band Wireless-AC 3165<br>- Supports 2.5” HDD/SSD, 7.0/9.5 mm thick (1 x 6 Gbps SATA 3)<br>- WIN7 32/64bit , WIN8.1 64bit , WIN10 64bit<br></p>',
                'option' => '{"lang":{"kh":"GB-BSi5H-6200"}}',
                'start_price' => 495.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["43625_1498533705.jpg","34579_1498533707.jpg","20328_1498533710.jpg","66730_1498533710.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-26 20:25:06',
                'updated_at' => '2017-06-26 20:25:06',
            ),
            65 => 
            array (
                'id' => 74,
                'category_id' => 41,
                'brand_id' => 2,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'GB-BKi5HA-7200',
            'description' => '<p>- Intel® Core™ i5-7200U 2.5GHz ~ 3.1GHz<br>- Ram 4G<br>- HDD 500G<br>- Gigabit LAN (Intel i219LM) / Audio<br>- Mini DP Resolution 3840 x 2160 @ 60Hz<br>- HDMI Resolution 3840 x 2160 @ 60Hz<br>- 1 x M.2 slot (2280_storage) PCIe /SATA<br>- 1 x PCIe M.2 NGFF 2230 A-E key slot occupied by the WiFi+BT card<br>- 1 x USB 3.1 type C / 1 x USB3.1 / 1 x head phone jack with MIC<br>- 1 x HDMI (2.0) / 1 x Mini DisplayPort (1.2) / 2 x USB 3.0 / 1 x RJ45 /1 x DC-In / 1 x Kensington lock slot<br>- Input: AC 100-240V Output: DC 19V 3.42A<br>- Bracket included Supports 75 x 75 and 100 x 100 mm<br>- Intel® Dual Band Wireless-AC 3168<br>- Supports 2.5” HDD/SSD, 7.0/9.5 mm thick (1 x 6 Gbps SATA 3)<br>&nbsp; WIN10 64bit<br></p>',
                'option' => '{"lang":{"kh":"GB-BKi5HA-7200"}}',
                'start_price' => 500.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["64346_1498534634.jpg","95978_1498534634.jpg","98025_1498534634.jpg","33221_1498534633.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-26 20:38:46',
                'updated_at' => '2017-06-26 20:38:46',
            ),
            66 => 
            array (
                'id' => 75,
                'category_id' => 41,
                'brand_id' => 2,
                'code' => NULL,
                'url_detail' => '',
                'title' => 'GB-BKi3HA-7100',
            'description' => '<p>- Intel® Core™ i3-7100U 2.4GHz<br>- Ram 4G<br>- HDD 500G<br>- Gigabit LAN (Intel i219LM) / Audio<br>- Mini DP Resolution 3840 x 2160 @ 60Hz<br>- HDMI Resolution 3840 x 2160 @ 60Hz<br>- 1 x M.2 slot (2280_storage) PCIe /SATA<br>- 1 x PCIe M.2 NGFF 2230 A-E key slot occupied by the WiFi+BT card<br>- 1 x USB 3.1 type C / 1 x USB3.1 / 1 x head phone jack with MIC<br>- 1 x HDMI (2.0) / 1 x Mini DisplayPort (1.2) / 2 x USB 3.0 / 1 x RJ45 /1 x DC-In / 1 x Kensington lock slot<br>- Supports 2.5” HDD/SSD, 7.0/9.5 mm thick (1 x 6 Gbps SATA 3)<br>- Input: AC 100-240V Output: DC 19V 3.42A<br>- Bracket included Supports 75 x 75 and 100 x 100 mm<br>- Intel® Dual Band Wireless-AC 3168<br>&nbsp; WIN10 64bit<br></p>',
                'option' => '{"lang":{"kh":"GB-BKi3HA-7100"}}',
                'start_price' => 415.0,
                'promotion_price' => NULL,
                'promotion_expire_date' => NULL,
                'image_url' => '["58029_1498534804.jpg","46050_1498534803.jpg","27207_1498534803.jpg","85701_1498534884.jpg"]',
                'status' => 1,
                'created_at' => '2017-06-26 20:41:34',
                'updated_at' => '2017-06-26 20:41:34',
            ),
            67 => 
            array (
                'id' => 76,
                'category_id' => 7,
                'brand_id' => 14,
                'code' => '7900X X-series Processor',
                'url_detail' => 'http://ark.intel.com/products/123613/Intel-Core-i9-7900X-X-series-Processor-13_75M-Cache-up-to-4_30-GHz',
                'title' => 'Intel Core i9-7900x X-Series Processor',
                'description' => '<p>Intel® Core™ i9-7900X X-series Processor<br>
13.75M Cache, up to 4.30 GHz 10 Core and 20 Threads <span class="price">= $ 1,065</span><br></p>',
                'option' => '{"lang":{"kh":"Intel\\u00ae Core\\u2122 i9-7900X X-series Processor"}}',
                'start_price' => 1065.0,
                'promotion_price' => 1065.0,
                'promotion_expire_date' => NULL,
                'image_url' => '["80504_1501212781.png","23625_1501212781.jpg"]',
                'status' => 1,
                'created_at' => '2017-07-27 20:34:40',
                'updated_at' => '2017-07-27 20:37:44',
            ),
            68 => 
            array (
                'id' => 77,
                'category_id' => 7,
                'brand_id' => 14,
                'code' => 'Intel® Core™ i7-6950X Processor Extreme Edition',
                'url_detail' => 'https://ark.intel.com/products/94456/Intel-Core-i7-6950X-Processor-Extreme-Edition-25M-Cache-up-to-3_50-GHz',
                'title' => 'Intel® Core™ i7-6950X Processor Extreme Edition',
            'description' => '<p><b> </b>Intel® Core™ i7-6950X Processor Extreme Edition (25M Cache, up to 3.50 GHz) 20 threads <span class="price">= $ 1,799</span>
<br></p><p class="txt">- Intel® Core™ i7-6900K (20M Cache, up to 3.70 GHz) 16 threads <span class="price">= $ 1,155</span></p><p class="txt">- Intel® Core™ i7-6850K  (15M Cache, up to 3.80 GHz) 12 threads <span class="price">= $ 699</span></p><p><br></p>',
                'option' => '{"lang":{"kh":"Intel\\u00ae Core\\u2122 i7-6950X Processor Extreme Edition"}}',
                'start_price' => 1799.0,
                'promotion_price' => 1799.0,
                'promotion_expire_date' => NULL,
                'image_url' => '["12104_1501213447.jpg","62331_1501213447.jpg"]',
                'status' => 1,
                'created_at' => '2017-07-27 20:44:24',
                'updated_at' => '2017-09-10 19:06:28',
            ),
            69 => 
            array (
                'id' => 78,
                'category_id' => 31,
                'brand_id' => 2,
                'code' => '001',
                'url_detail' => 'https://www.gigabyte.com/Motherboard/X399-AORUS-Gaming-7-rev-10#kf',
                'title' => 'X399 AORUS Gaming 7',
            'description' => '<div><div style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 36px; font-family: Arial, 微軟正黑體, "Microsoft JhengHei", 微軟雅黑體, "Microsoft YaHei", SimHei, メイリオ, Meiryo, "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", 新細明體, Arial, Verdana, Helvetica, sans-serif; font-size: 26px; vertical-align: baseline; color: rgb(255, 255, 255); background-color: rgb(0, 0, 0);">AMD X399 Gaming motherboard with RGB Fusion, Digital LED strip support, Triple M.2 with Thermal Guard,120dB SNR ALC1220, Killer E2500 Gaming Network, Front & Rear USB 3.1 Gen 2 Type-C, Intel Dual Band 802.11ac WiFi+BT4.2</div></div>',
                'option' => '{"lang":{"kh":"X399 AORUS Gaming 7"}}',
                'start_price' => 400.0,
                'promotion_price' => 500.0,
                'promotion_expire_date' => '2017-09-30',
                'image_url' => '["73149_1505096998.png","61887_1505096998.png"]',
                'status' => 1,
                'created_at' => '2017-09-10 19:31:04',
                'updated_at' => '2017-09-10 19:50:34',
            ),
        ));
        
        
    }
}