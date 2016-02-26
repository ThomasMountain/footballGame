<?php

use App\League;
use Illuminate\Database\Seeder;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('league')
            ->delete();

        $leagueRows = array(
            ['id' => 1, 'name' => 'English Premier League', 'country_id' => 1, 'no_of_clubs' => 20]
        );

        League::insert($leagueRows);
    }
}