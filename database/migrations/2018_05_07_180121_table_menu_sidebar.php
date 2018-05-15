<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableMenuSidebar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_sidebar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stt');
            $table->integer('categorie_id');
            $table->string('categorie_name');
            $table->string('categorie_url');
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
        Schema::drop('menu_sidebar');
    }
}
