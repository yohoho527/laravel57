<?php

use App\Cart;
use Illuminate\Database\Seeder;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
        Cart::truncate();

        $production2 = Cart::create([
            'ctNo' => '123',

            'user_id' => 1,
        ]);

    }
}
