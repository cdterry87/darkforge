<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LevelSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(OreSeeder::class);
        $this->call(GemSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(AchievementSeeder::class);
    }
}
