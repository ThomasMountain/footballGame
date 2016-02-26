<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')
            ->delete();

        $itemData = array(
            ['id' => 1],
        );

        Item::insert($itemData);
    }
}
