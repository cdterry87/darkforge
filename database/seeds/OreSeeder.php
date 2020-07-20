<?php

use App\Ore;
use Illuminate\Database\Seeder;

class OreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ore::create([
            'name' => 'Copper',
            'buy_price' => 50,
            'time' => 60,
            'level' => 1
        ]);

        Ore::create([
            'name' => 'Iron',
            'buy_price' => 150,
            'time' => 300,
            'level' => 2
        ]);

        Ore::create([
            'name' => 'Silver',
            'buy_price' => 500,
            'time' => 2700,
            'level' => 3
        ]);

        Ore::create([
            'name' => 'Gold',
            'buy_price' => 1000,
            'time' => 10800,
            'level' => 4
        ]);

        Ore::create([
            'name' => 'Platinum',
            'buy_price' => 2000,
            'time' => 32400,
            'level' => 5
        ]);

        Ore::create([
            'name' => 'Mithril',
            'buy_price' => 5000,
            'time' => 86400,
            'level' => 6
        ]);

        Ore::create([
            'name' => 'Orichalcum',
            'buy_price' => 10000,
            'time' => 259200,
            'level' => 7
        ]);
    }
}
