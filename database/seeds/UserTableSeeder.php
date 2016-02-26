<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->delete();

        $userRows = array(
            ['id' => 1, 'first_name' => 'Thomas', 'surname' => 'Mountain', 'email' => 'tom@tommountain.co.uk', 'password' => Hash::make('password'), 'username' => 'tom', 'admin_flag' => 'Y', 'created_at' => Carbon\Carbon::now(), 'updated_at' => Carbon\Carbon::now()],
        );

        User::insert($userRows);

    }
}
