<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Acl extends Migration
{
    public function up()
    {
        Schema::create('acl', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('functionality_id');
        });
    }
}
