<?php

use Illuminate\Database\Seeder;
use App\Cartlist_to_Production;
class Cartlist_to_ProductionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cartlist_to_production::truncate();
        // $production2 =Cartlist_to_Production::create([
        //     'cartlist_id' => '1',
        //     'production_id' => "1",

        // ]);

        // $production2 = Cartlist_to_Production::create([
        //     'cartlist_id' => '2',
        //     'production_id' => "2",

        // ]);
    }
    }
}
