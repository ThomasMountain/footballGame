<?php

use App\Manager;
use Illuminate\Database\Seeder;

class ManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('manager')
            ->delete();

        $managerRows = array(
            ['id' => 1, 'first_name' => 'Arsene', 'surname' => 'Wenger', 'dob' => '22-Oct-1949'],
        );

        Manager::insert($managerRows);
    }
}

