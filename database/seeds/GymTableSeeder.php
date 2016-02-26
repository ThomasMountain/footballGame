<?php

use App\Gym;
use Illuminate\Database\Seeder;

class GymTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gym')
            ->delete();

        $gymData = array(
            ['id' => 1],
        );

        Gym::insert($gymData);
    }
}
