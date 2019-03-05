<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FunctionalityGroup extends Migration
{
    public function up()
    {
        Schema::create('functionality_group', function (Blueprint $table) {
            $table->increments('id');
            $table->char('title', 30);
        });
    }
}
