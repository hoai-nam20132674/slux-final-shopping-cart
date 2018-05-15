<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsRepairImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_repair_image', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_repair_id')->unsigned();
            $table->foreign('product_repair_id')->references('id')->on('products_repair')->onDelete('cascade');
            $table->integer('image_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            $table->string('url_image');
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
        Schema::drop('products_repair_image');
    }
}
