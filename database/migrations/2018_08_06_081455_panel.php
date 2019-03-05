<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Panel extends Migration
{
    public function up()
    {
        Schema::create('panel', function (Blueprint $table) {
            $table->increments('id');
            $table->char('title',30);
        });
    }
}
