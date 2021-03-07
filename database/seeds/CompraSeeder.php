<?php

use Illuminate\Database\Seeder;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('compras')->insert([
            'user_id' => 1,
            'products_id'=> 1,
            'monto'=> 50,
            'tipoDePago' => 'K',
            'status'=> 'por enviar', 
        ]);
    }
}
