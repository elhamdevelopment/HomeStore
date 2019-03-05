<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PanelMenu extends Migration
{
    public function up()
    {
        Schema::create('panel_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id');
            $table->integer('panel_id');
            $table->integer('functionality_id');
            $table->char('title', 100);
            $table->char('icon', 11);
            $table->char('page_name', 50);
            $table->integer('order');
            $table->tinyInteger('status')->comment('1 => enable, 2 => disable');
        });
    }
}
