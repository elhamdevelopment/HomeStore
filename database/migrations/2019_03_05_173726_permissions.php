<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Permissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('permission_group_id');
            $table->char('controller', 50);
            $table->char('action', 50);
            $table->char('description', 255);
            $table->char('title', 150);
            $table->char('icon', 11);
            $table->char('page_name', 50);
            $table->integer('order');
            $table->tinyInteger('status')->comment('1 => enable, 2 => disable');
            $table->tinyInteger('display_in_menu')->comment('1 => enable, 2 => disable');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
