<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsRepair extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_repair', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('phone_number',20);
            $table->string('address');
            $table->string('product_name');
            $table->string('error');
            $table->integer('status');
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
        Schema::drop('products_repair');
    }
}
