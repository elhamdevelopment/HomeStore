<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName', 40);
            $table->string('lastName', 30);
            $table->tinyInteger('gender')->comment('0 = unknown,1 = male,1 = Female')->default(0);
            $table->string('email', 60)->unique();
            $table->string('password', 60);
            $table->string('mobile', 11)->unique()->nullable();
            $table->dateTime('joinDate')->nullable();
            $table->dateTime('lastLoginDate')->nullable();
            $table->boolean('isLogin')->default(false);
            $table->tinyInteger('status')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();

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
