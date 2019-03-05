<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleFunctionality extends Migration
{
    public function up()
    {
        Schema::create('role_functionality', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
            $table->integer('functionality_id');
        });
    }
}
