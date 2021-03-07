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
        DB::table('products')->insert([
            'category_id' => 1,
            'description'=> 'descripcion de prueba',
            'real_price' => 100,
            'offer_price'=> 50, 
            'offer_percent' => 50,
            'shipping_days' => 7,
            'shipping_price' => 15,
        ]);
        //$subcategories = \App\Subcategory::all(['id', 'category_id']);

        //$subcategories->each(function ($data) {
          //  factory(\App\Product::class)->times(rand(12, 28))->create([
            //    'category_id' => $data->id_category,
              //  'subcategory_id' => $data->id
            //]);
       // });
        
    }
}
