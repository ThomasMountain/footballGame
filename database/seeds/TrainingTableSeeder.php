<?php

use App\Training;
use Illuminate\Database\Seeder;

class TrainingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training')
            ->delete();

        $trainingData = array(
            ['id' => 1],
        );

        Training::insert($trainingData);
    }
}
