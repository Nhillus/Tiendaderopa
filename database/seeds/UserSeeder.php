<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Ivan',
            'email'=> 'lebuya@gmail.com',
            'password'=> Hash::make('lebuyaadmin'),
            'id_rol' => 1,
            'remember_token'=> Str::random(60), 
        ]);
    }
}
