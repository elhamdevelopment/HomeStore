<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RolePermission extends Migration
{
    public function up()
    {
        Schema::create('role_permission', function (Blueprint $table) {
            $table->integer('role_id');
            $table->integer('permission_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('role_permission');
    }
}
