<?php

use App\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'level' => 2,
            'total_earnings_required' => 1000
        ]);

        Level::create([
            'level' => 3,
            'total_earnings_required' => 10000
        ]);

        Level::create([
            'level' => 4,
            'total_earnings_required' => 100000
        ]);

        Level::create([
            'level' => 5,
            'total_earnings_required' => 500000
        ]);

        Level::create([
            'level' => 6,
            'total_earnings_required' => 1000000
        ]);

        Level::create([
            'level' => 7,
            'total_earnings_required' => 100000000
        ]);
    }
}
