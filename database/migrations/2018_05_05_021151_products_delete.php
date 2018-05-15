<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_delete', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('name');
            $table->string('price');
            $table->integer('view');
            $table->integer('featured');
            $table->string('title');
            $table->longText('description');
            $table->string('seo_description');
            $table->string('seo_keyword');
            $table->longText('tskt');
            $table->longText('sale');
            $table->string('image');
            $table->string('url');
            $table->boolean('display');
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
        Schema::drop('products_delete');
    }
}
