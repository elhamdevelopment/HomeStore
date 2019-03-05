<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PanelFunctionality extends Migration
{
    public function up()
    {
        Schema::create('panel_functionality', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('panel_id');
            $table->integer('functionality_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
