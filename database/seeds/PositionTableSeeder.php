<?php

use App\Position;
use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('position')
            ->delete();

        $positionData = array(
            ['id' => 1, 'name' => 'Attacker', 'description' => ''],
            ['id' => 2, 'name' => 'Midfielder', 'description' => ''],
            ['id' => 3, 'name' => 'Defender', 'description' => ''],
            ['id' => 4, 'name' => 'Goalkeeper', 'description' => ''],
        );

        Position::insert($positionData);
    }
}
