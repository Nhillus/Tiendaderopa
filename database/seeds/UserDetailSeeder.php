<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $user = DB::table('users')
                ->where(['email'=>'lebuya@gmail.com'])
                ->value('id');
        
        //
        DB::table('user_details')->insert([
            'saludo' => 'Mr',
            'primer_nombre'=> 'Ivan',
            'primer_apellido'=> 'Molinos',
            'correo_eletronico' => 'lebuya@gmail.com',
            'idioma'=> 'German',
            'pueblo_favorito' => 'zurich', 
            'user_id' => $user,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
