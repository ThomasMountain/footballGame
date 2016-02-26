<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeagueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id')
                ->unsigned();
            $table->string('name');
            $table->integer('country_id')->unsigned();
            $table->integer('league_id')->unsigned();
            $table->integer('no_of_clubs')->unsigned();
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
        Schema::drop('league');
    }
}
