<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id')->unsigned();
            $table->string('first_name');
            $table->string('surname');
            $table->string('position_id');
            $table->integer('club_id')->unsigned();
            $table->float('money')->default('0');
            $table->integer('energy')->default(100)->unsigned();
            $table->char('active_flag', 1)->default('Y');
            $table->integer('accommodation_id')->unsigned()->default(1);
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
        Schema::drop('player');
    }
}
