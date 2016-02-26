<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGymTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gym', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id')
                ->unsigned();
            $table->integer('stamina')->unsigned()->default(0);
            $table->integer('strength')->unsigned()->default(0);
            $table->integer('pace')->unsigned()->default(0);
            $table->integer('stamina_count')->unsigned()->default(0);
            $table->integer('strength_count')->unsigned()->default(0);
            $table->integer('pace_count')->unsigned()->default(0);
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
        Schema::drop('gym');
    }
}
