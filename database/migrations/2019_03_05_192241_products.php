<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned();
            $table->integer('shop_id')->unsigned();
            $table->string('title',240);
            $table->bigInteger('price')->default(0);
            $table->boolean('is_show')->default(true);
            $table->boolean('is_available')->default(true);
            $table->boolean('is_discount')->default(false);
            $table->string('warranty',190)->nullable();
            $table->string('image_url')->nullable();
            $table->string('brand')->nullable();
            $table->text('description')->nullable();
            $table->decimal('total_rate')->nullable();
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
        Schema::dropIfExists('products');
    }
}
