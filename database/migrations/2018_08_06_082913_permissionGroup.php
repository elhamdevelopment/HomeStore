<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PermissionGroup extends Migration
{
    public function up()
    {
        Schema::create('permission_group', function (Blueprint $table) {
            $table->increments('id');
            $table->char('title', 30);
        });
    }

    public function down()
    {
        Schema::dropIfExists('permission_group');
    }
}
