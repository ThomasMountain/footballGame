<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id')
                ->unsigned();
            $table->string('first_name');
            $table->string('surname');
            $table->timestamp('dob');
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
        Schema::drop('manager');
    }
}
