<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRole extends Migration
{
    public function up()
    {
        //if (Schema::hasTable('role_user')) {
            Schema::create('role_user', function (Blueprint $table) {
                $table->integer('user_id');
                $table->integer('role_id');
            });
        //}
    }

    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
