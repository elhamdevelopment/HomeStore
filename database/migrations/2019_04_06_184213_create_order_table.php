<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('order_date');
            $table->bigInteger('user_id');
            $table->bigInteger('shop_id');
            $table->boolean('payment_type')->comment('2 = کیف پول ,1 = نقدی,0 = آنلابن')->default(0);
            $table->integer('price');
            $table->integer('discount');
            $table->integer('discount_code');
            $table->tinyInteger('delivery_type')->default(0)->comment('0= پیک رستوران ، 1= پیک سایت');
            $table->string('receiver_name');
            $table->string('description');
            $table->string('address');
            $table->tinyInteger('status')->comment('0 = در حال تهیه ,1 = ارسال شده,1 = تایید شده = درحال سفارش')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
