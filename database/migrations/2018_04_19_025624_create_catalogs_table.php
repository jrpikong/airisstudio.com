<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_catalog_id', false, true);
            $table->string('name',100);
            $table->string('slug',105);
            $table->string('catalog_code', 45);
            $table->longText('body');
            $table->longText('images');
            $table->string('status',45);
            $table->double('price');
            $table->integer('ratting')->nullable();
            $table->timestamps();

            $table->foreign('category_catalog_id')->references('id')->on('category_catalogs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogs');
    }
}
