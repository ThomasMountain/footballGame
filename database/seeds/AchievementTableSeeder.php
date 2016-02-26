<?php

use App\Achievement;
use Illuminate\Database\Seeder;

class AchievementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('achievements')
            ->delete();

        $achievementData = array(
            ['name' => 'Logged In', 'description' => 'User Logged In For The First Time'],
        );

        Achievement::insert($achievementData);
    }
}
