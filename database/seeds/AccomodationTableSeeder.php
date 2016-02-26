<?php

use App\Accommodation;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AccomodationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accommodations')
            ->delete();

        $accommodationData = array(
            [
                'name' => "Parent's House",
                'description' => 'Home',
                'cost' => 0,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
        );

        Accommodation::insert($accommodationData);
    }
}