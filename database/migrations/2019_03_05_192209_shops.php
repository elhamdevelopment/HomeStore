<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Shops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('shop_category_id');
            $table->string('name');
            $table->integer('city');
            $table->string('mobile');
            $table->string('phone');
            $table->string('email',60);
            $table->string('website');
            $table->string('postCode');
            $table->text('address');
            $table->string('nationalityCode');
            $table->string('sendType');
            $table->string('sendLocation');
            $table->string('shopPrivateDomain');
            $table->string('user_id');
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
        Schema::dropIfExists('shops');
    }
}
