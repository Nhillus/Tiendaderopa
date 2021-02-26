<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'rols',
            'users',
            'user_details' 
        ]);

        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserDetailSeeder::class);

       // $this->call([PromotionSeeder::class, CategorySeeder::class, SubcategorySeeder::class,RolSeeder::class, UserSeeder::class, UserDetailSeeder::class]); // ProductSeeder::class
       // Nhillus: Comente la de arriba porque taradaba mucho en seedear hay que modificarla para que sean menos semillas y que sean medianamente reales
    }

    protected function truncateTables(array $tables) {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        foreach ($tables as $table) {
            DB::table($table)->truncate(); 
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
    }
}
