<?php

use Illuminate\Database\Seeder;

class SaleOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sale_orders')->delete();
        
        
        
    }
}