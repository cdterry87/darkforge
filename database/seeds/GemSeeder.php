<?php

use App\Gem;
use Illuminate\Database\Seeder;

class GemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gem::create([
            'name' => 'Garnet',
            'enhancement_bonus' => 1000
        ]);

        Gem::create([
            'name' => 'Amethyst',
            'enhancement_bonus' => 1000
        ]);

        Gem::create([
            'name' => 'Aquamarine',
            'enhancement_bonus' => 1000
        ]);

        Gem::create([
            'name' => 'Diamond',
            'enhancement_bonus' => 1000
        ]);

        Gem::create([
            'name' => 'Emerald',
            'enhancement_bonus' => 1000
        ]);

        Gem::create([
            'name' => 'Alexandrite',
            'enhancement_bonus' => 1000
        ]);

        Gem::create([
            'name' => 'Ruby',
            'enhancement_bonus' => 1000
        ]);

        Gem::create([
            'name' => 'Peridot',
            'enhancement_bonus' => 1000
        ]);

        Gem::create([
            'name' => 'Sapphire',
            'enhancement_bonus' => 1000
        ]);

        Gem::create([
            'name' => 'Tourmaline',
            'enhancement_bonus' => 1000
        ]);

        Gem::create([
            'name' => 'Topaz',
            'enhancement_bonus' => 1000
        ]);

        Gem::create([
            'name' => 'Zircon',
            'enhancement_bonus' => 1000
        ]);
    }
}
