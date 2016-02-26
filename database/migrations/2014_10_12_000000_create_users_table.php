<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id')
                  ->unsigned();
            $table->string('username');
            $table->string('password');
            $table->string('email')
                  ->unique();
            $table->string('first_name');
            $table->string('surname');
            $table->char('active_flag', 1)
                  ->default('Y');
            $table->char('admin_flag', 1)
                  ->default('N');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('last_login')
                  ->nullable();
        });

        /*Add indexes*/
        Schema::table('users', function (Blueprint $table) {
            $table->index('email');
            $table->index('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
