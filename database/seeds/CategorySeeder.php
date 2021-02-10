<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotions = \App\Promotion::pluck('id');

        $promotions->each(function ($id_promotion) {
            factory(\App\Category::class)->times(rand(12, 28))->create([
                'id_promotion' => $id_promotion
            ]);
        });
    }
}
