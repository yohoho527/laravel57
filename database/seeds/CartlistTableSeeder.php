<?php

use App\Cartlist;
use Illuminate\Database\Seeder;

class CartlistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cartlist::truncate();

        // $item1 = Cartlist::create([
        //     'pNum' => 1,
        //     'pNo' => '1114460-PRBL',
        //     'pSize' => 'L',
        //     'cart_id' => 1,
        // ]);



    }
}
