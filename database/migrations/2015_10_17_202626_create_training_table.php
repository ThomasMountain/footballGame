<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id')
                ->unsigned();
            $table->integer('passing')->unsigned()->default(0);
            $table->integer('shooting')->unsigned()->default(0);
            $table->integer('dribbling')->unsigned()->default(0);
            $table->integer('tackling')->unsigned()->default(0);
            $table->integer('interception')->unsigned()->default(0);
            $table->integer('goalkeeping')->unsigned()->default(0);
            $table->integer('passing_count')->unsigned()->default(0);
            $table->integer('shooting_count')->unsigned()->default(0);
            $table->integer('dribbling_count')->unsigned()->default(0);
            $table->integer('tackling_count')->unsigned()->default(0);
            $table->integer('interception_count')->unsigned()->default(0);
            $table->integer('goalkeeping_count')->unsigned()->default(0);
            $table->char('active_flag', 1)
                ->default('Y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('training');
    }
}
