<?php

use App\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')
            ->delete();

        $eventData = array(
            [
                'name' => 'Login',
                'description' => 'You Logged In',
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        );

        Event::insert($eventData);
    }
}
