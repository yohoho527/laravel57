<?php

use Illuminate\Database\Seeder;
use App\Cartlist_Production;
class Cartlist_ProductionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cartlist_production::truncate();
        $production2 =Cartlist_Production::create([
            'cartlist_id' => '1',
            'production_id' => "1",

        ]);

        // $production2 = Cartlist_Production::create([
        //     'cartlist_id' => '2',
        //     'production_id' => "2",

        // ]);


        // $production2 = Cartlist_Production::create([
        //     'cartlist_id' => '3',
        //     'production_id' => "2",

        // ]);


    }
}
