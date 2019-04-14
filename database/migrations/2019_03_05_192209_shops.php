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
            $table->integer('shop_category_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('title');
            $table->string('manager_name');
            $table->string('photos')->nullable();
            $table->integer('city');
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->decimal('total_rate')->nullable()->default(0);
            $table->string('description',240)->nullable();
            $table->string('email',128);
            $table->string('website',80)->nullable();
            $table->string('post_code',10)->nullable();
            $table->text('address')->nullable();
            $table->string('send_type');
            $table->integer('delivery_price')->default(0);
            $table->string('delivery_duration');
            $table->string('covered_area');
            $table->string('location');
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
