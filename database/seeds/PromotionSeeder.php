<?php

use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('Promotion')->insert([
            'title' => 'NIKE',
            'description'=> 'Zapatos de la marca Nike',
            'image'=> 'C:\Users\kire\Desktop\ImagenesParaPromocioneslebuya\Nike',
            'shipping'=> 'C:\Users\kire\Desktop\ImagenesParaPromocioneslebuya\Nike',

            'real_price' => 100,
            'offer_price'=> 50, 
            'offer_percent' => 50,
            'shipping_days' => 7,
            'shipping_price' => 15,
        ]);*/
        factory(\App\Promotion::class)->times(50)->create();
    }
}
