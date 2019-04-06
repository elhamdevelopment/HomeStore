<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('avatar')->nullable();
            $table->string('first_name', 40);
            $table->string('last_name', 40);
            $table->bigInteger('credit')->default(0);;
            $table->tinyInteger('gender')->comment('0 = unknown,1 = male,1 = Female')->default(0);
            $table->string('email', 128)->unique();
            $table->string('mobile', 11)->unique()->nullable();
            $table->string('password', 60);
            $table->timestamp('last_login_date')->nullable();
            $table->timestamp('email_verified')->nullable();
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('role_id'); //changed this line
            $table->rememberToken();
            $table->timestamps();

        });
        Schema::table('users', function (Blueprint $table) {
//            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
