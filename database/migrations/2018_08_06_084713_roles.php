<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Roles extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->char('title',30);
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
