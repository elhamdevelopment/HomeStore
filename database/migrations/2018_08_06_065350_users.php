<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('panel_id');
            $table->char('name', 40);
            $table->char('family', 30);
            $table->tinyInteger('gender')->comment('0 = unknown,1 = male,1 = Female');
            $table->string('email',60)->unique();
            $table->string('username', 60)->unique();
            $table->string('password', 60);
            $table->string('mobile', 11)->unique();
            $table->integer('joinDate');
            $table->integer('lastLoginDate');
            $table->tinyInteger('isLogin');
            $table->tinyInteger('status');
            $table->rememberToken();
            $table->timestamps();
        });
    }
}
