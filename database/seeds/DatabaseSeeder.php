<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([PromotionSeeder::class, CategorySeeder::class, SubcategorySeeder::class]); // ProductSeeder::class
    }
}
