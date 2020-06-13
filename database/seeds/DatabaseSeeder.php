<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
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
        // $this->call(UsersTableSeeder::class);
        //DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::disableForeignKeyConstraints();
        $this->call(ProductionTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(CartlistTableSeeder::class);
        $this->call(Cartlist_ProductionTableSeeder::class);
        $this->call(CartsSeeder::class);
        Schema::enableForeignKeyConstraints();
        //DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
