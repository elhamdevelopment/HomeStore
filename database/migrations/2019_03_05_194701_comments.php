<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('shop_id');
            $table->tinyInteger('section')->comment('1=order, 2=product');
            $table->bigInteger('section_id');
            $table->bigInteger('reply_id')->nullable();
            $table->tinyInteger('satisfied_status')->comment('راضی=1 ، ناراضی=-1 ، معمولی=0');
            $table->tinyInteger('status')->comment('0=تایید شده ، 1= در انتظار بررسی ، 2= رد شده ، 3= زباله دان');
            $table->string('title',100)->nullable();
            $table->text('body');
            $table->ipAddress('ip_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
