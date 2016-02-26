<?php

use App\Player;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('player')
            ->delete();

        $playerData = array(
            ['id' => 1,
                'first_name' => 'Tommy',
                'surname' => 'Mountain',
                'club_id' => '1',
                'money' => '100000',
                'accommodation_id' => 1,
                'created_at' => Carbon::now()]
        );

        Player::insert($playerData);
    }
}