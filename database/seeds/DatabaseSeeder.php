<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(LeagueSeeder::class);
        $this->call(ManagerTableSeeder::class);
        $this->call(StadiumTableSeeder::class);
        $this->call(ClubTableSeeder::class);
        $this->call(PlayerTableSeeder::class);
        $this->call(TrainingTableSeeder::class);
        $this->call(GymTableSeeder::class);
        $this->call(PositionTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(AchievementTableSeeder::class);
        $this->call(AccomodationTableSeeder::class);
        $this->call(EventTableSeeder::class);

        Model::reguard();
    }
}
