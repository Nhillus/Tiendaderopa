<?php

use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = \App\Category::pluck('id');

        $categories->each(function ($category) {
            factory(\App\Subcategory::class)->times(rand(12, 28))->create([
                'id_category' => $category,
            ]);
        });
    }
}
