<?php

use App\Club;
use Illuminate\Database\Seeder;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('club')
            ->delete();

        $clubData = array(
        ['id' => 1, 'name' => 'Arsenal', 'founded' => 1886, 'nickname' => 'The Gunners', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 1, 'manager_id' => 1],
        ['id' => 2, 'name' => 'Aston Villa', 'founded' => 1874, 'nickname' => 'The Villains', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 2, 'manager_id' => 1],
        ['id' => 3, 'name' => 'Chelsea', 'founded' => 1905, 'nickname' => 'The Blues', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 3, 'manager_id' => 1],
        ['id' => 4, 'name' => 'Everton', 'founded' => 1878, 'nickname' => 'The Toffees', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 4, 'manager_id' => 1],
        ['id' => 5, 'name' => 'Fulham', 'founded' => 1979, 'nickname' => 'The Cottagers', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 5, 'manager_id' => 1],
        ['id' => 6, 'name' => 'Liverpool', 'founded' => 1892, 'nickname' => 'The Reds', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 6, 'manager_id' => 1],
        ['id' => 7, 'name' => 'Manchester City', 'founded' => 1887, 'nickname' => 'The Blues', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 7, 'manager_id' => 1],
        ['id' => 8, 'name' => 'Manchester United', 'founded' => 1878, 'nickname' => 'The Red Devils', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 8, 'manager_id' => 1],
        ['id' => 9, 'name' => 'Newcastle United', 'founded' => 1892, 'nickname' => 'The Magpies', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 9, 'manager_id' => 1],
        ['id' => 10, 'name' => 'Norwich City', 'founded' => 1902, 'nickname' => 'The Canaries', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 10, 'manager_id' => 1],
        ['id' => 11, 'name' => 'Queens Park Rangers', 'founded' => 1882, 'nickname' => 'QPR', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 11, 'manager_id' => 1],
        ['id' => 12, 'name' => 'Reading', 'founded' => 1871, 'nickname' => 'The Royals', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 12, 'manager_id' => 1],
        ['id' => 13, 'name' => 'Southampton', 'founded' => 1885, 'nickname' => 'The Saints', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 13, 'manager_id' => 1],
        ['id' => 14, 'name' => 'Stoke', 'founded' => 1863, 'nickname' => 'The Potters', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 14, 'manager_id' => 1],
        ['id' => 15, 'name' => 'Sunderland', 'founded' => 1879, 'nickname' => 'The Black Cats', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 15, 'manager_id' => 1],
        ['id' => 16, 'name' => 'Swansea City', 'founded' => 1912, 'nickname' => 'The Swans', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 16, 'manager_id' => 1],
        ['id' => 17, 'name' => 'Tottenham Hotspur', 'founded' => 1882, 'nickname' => 'Spurs', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 17, 'manager_id' => 1],
        ['id' => 18, 'name' => 'West Bromwich Albion', 'founded' => 1878, 'nickname' => 'The Baggies', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 18, 'manager_id' => 1],
        ['id' => 19, 'name' => 'West Ham United', 'founded' => 1895, 'nickname' => 'The Hammers', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 19, 'manager_id' => 1],
        ['id' => 20, 'name' => 'Wigan Athletic', 'founded' => 1932, 'nickname' => 'The Latics', 'league_id' => 1, 'country_id' => 1, 'stadium_id' => 20, 'manager_id' => 1]
    );

        Club::insert($clubData);
    }
}
