<?php

use App\Stadium;
use Illuminate\Database\Seeder;

class StadiumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stadium')
            ->delete();

        $stadiumRows = array(
            ['id' => 1, 'name' => 'Emirates Stadium', 'capacity' => 60361],
            ['id' => 2, 'name' => 'Villa Park', 'capacity' => 42788],
            ['id' => 3, 'name' => 'Stamford Bridge', 'capacity' => 42055],
            ['id' => 4, 'name' => 'Goodison Park', 'capacity' => 40569],
            ['id' => 5, 'name' => 'Craven Vottage', 'capacity' => 26600],
            ['id' => 6, 'name' => 'Anfield', 'capacity' => 45362],
            ['id' => 7, 'name' => 'Etihad Stadium', 'capacity' => 47726],
            ['id' => 8, 'name' => 'Old Trafford', 'capacity' => 76212],
            ['id' => 9, 'name' => 'St James Park', 'capacity' => 52387],
            ['id' => 10, 'name' => 'Carrow Road', 'capacity' => 27033],
            ['id' => 11, 'name' => 'Loftus Road', 'capacity' => 19128],
            ['id' => 12, 'name' => 'Madejski', 'capacity' => 24224],
            ['id' => 13, 'name' => 'St Marys Stadium', 'capacity' => 32689],
            ['id' => 14, 'name' => 'Britannia', 'capacity' => 28384],
            ['id' => 15, 'name' => 'Stadium Of Light', 'capacity' => 49000],
            ['id' => 16, 'name' => 'Liberty Stadium', 'capacity' => 20532],
            ['id' => 17, 'name' => 'White Hart Lane', 'capacity' => 36310],
            ['id' => 18, 'name' => 'The Hawthorns', 'capacity' => 28000],
            ['id' => 19, 'name' => 'Upton Park', 'capacity' => 35647],
            ['id' => 20, 'name' => 'DW Stadium', 'capacity' => 25138]
        );

        Stadium::insert($stadiumRows);
    }
}
