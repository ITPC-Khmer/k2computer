<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ItemBrandsTableSeeder::class);
        $this->call(ItemCategoriesTableSeeder::class);
        $this->call(ItemCategoryDetailsTableSeeder::class);
        $this->call(ItemFeatureDetailsTableSeeder::class);
        $this->call(ItemFeaturesTableSeeder::class);
        $this->call(ItemSpaceDetailsTableSeeder::class);
        $this->call(ItemSpacesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(SaleOrderDetailsTableSeeder::class);
        $this->call(SaleOrdersTableSeeder::class);
        $this->call(SlidesTableSeeder::class);
        $this->call(WebSettingsTableSeeder::class);
        $this->call(WhatnewsTableSeeder::class);
    }
}
