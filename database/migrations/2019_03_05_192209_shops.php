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
            $table->boolean('is_discount')->default(false);
            $table->boolean('is_special')->default(false);
            $table->integer('discount')->default(0);
            $table->integer('shop_category_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('title');
            $table->string('manager_name');
            $table->string('photos')->nullable(); //*
            $table->string('logo')->nullable();
            $table->string('mobile',11);
            $table->string('phone')->nullable();
            $table->decimal('total_rate')->nullable()->default(0);
            $table->string('description',240)->nullable();
            $table->string('email',128);
            $table->string('website',80)->nullable();
            $table->string('post_code',10)->nullable();
            $table->tinyInteger('delivery_type');
            $table->integer('delivery_price')->default(0);
            $table->string('delivery_duration-min');
            $table->string('delivery_duration-max');
            $table->text('address')->nullable();
            $table->integer('city');
            $table->string('covered_area');
            $table->string('location',190);//lat lang
            $table->integer('min_order');
            $table->string('shop_private_domain');
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
