<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('product_category', function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->integer('shop_category_id');
//            $table->string('title',240);
//            $table->string('icon','128');
//            $table->string('description','190');
//            $table->boolean('is_active');
//            $table->bigInteger('parent_id');
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_category');
    }
}
