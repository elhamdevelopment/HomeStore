<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Functionality extends Migration
{
    public function up()
    {
        Schema::create('functionality', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('functionality_group_id');
            $table->char('controller', 50);
            $table->char('action', 50);
            $table->char('title', 150);
            $table->char('description', 255);
            $table->tinyInteger('status')->comment('1 => enable, 2 => disable');
            $table->tinyInteger('display_in_menu')->comment('1 => enable, 2 => disable');
        });
    }
}
