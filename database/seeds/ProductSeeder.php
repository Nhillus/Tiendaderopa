<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = \App\Subcategory::all(['id', 'id_category']);

        $subcategories->each(function ($data) {
            factory(\App\Product::class)->times(rand(12, 28))->create([
                'id_category' => $data->id_category,
                'id_subcategory' => $data->id
            ]);
        });
    }
}
