<?php

use App\Ore;
use App\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ores = Ore::get();
        $types = [
            [
                'name' => 'Knife',
                'category_id' => 1,
                'ore_quantity_required' => 1,
            ],
            [
                'name' => 'Sword',
                'category_id' => 1,
                'ore_quantity_required' => 2,
            ],
            [
                'name' => 'Shield',
                'category_id' => 1,
                'ore_quantity_required' => 3,
            ],
            [
                'name' => 'Axe',
                'category_id' => 1,
                'ore_quantity_required' => 2,
            ],
            [
                'name' => 'Spear',
                'category_id' => 1,
                'ore_quantity_required' => 1,
            ],
            [
                'name' => 'Helmet',
                'category_id' => 2,
                'ore_quantity_required' => 1,
            ],
            [
                'name' => 'Gloves',
                'category_id' => 2,
                'ore_quantity_required' => 1,
            ],
            [
                'name' => 'Chestplate',
                'category_id' => 2,
                'ore_quantity_required' => 3,
            ],
            [
                'name' => 'Leggings',
                'category_id' => 2,
                'ore_quantity_required' => 2,
            ],
            [
                'name' => 'Boots',
                'category_id' => 2,
                'ore_quantity_required' => 1,
            ],
            [
                'name' => 'Ring',
                'category_id' => 3,
                'ore_quantity_required' => 1,
            ],
            [
                'name' => 'Necklace',
                'category_id' => 3,
                'ore_quantity_required' => 2,
            ],
            [
                'name' => 'Bracelet',
                'category_id' => 3,
                'ore_quantity_required' => 2,
            ],
            [
                'name' => 'Belt',
                'category_id' => 3,
                'ore_quantity_required' => 3,
            ]
        ];

        foreach ($ores as $ore) {
            foreach ($types as $type) {
                Item::create([
                    'name' => $ore->name . ' ' . $type['name'],
                    'ore_id' => $ore->id,
                    'category_id' => $type['category_id'],
                    'ore_quantity_required' => $type['ore_quantity_required'],
                    'sell_price' => $ore->buy_price * 3 * $type['ore_quantity_required']
                ]);
            }
        }
    }
}
