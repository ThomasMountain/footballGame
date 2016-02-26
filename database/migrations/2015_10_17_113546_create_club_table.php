<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateClubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id')
                ->unsigned();
            $table->string('name');
            $table->string('nickname');
            $table->integer('stadium_id')->unsigned();
            $table->integer('manager_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->integer('league_id')->unsigned();
            $table->integer('founded')->unsigned();
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
        Schema::drop('club');
    }
}
