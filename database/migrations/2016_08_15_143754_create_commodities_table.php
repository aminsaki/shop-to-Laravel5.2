<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommoditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('img');
            $table->string('titles');
            $table->integer('originalprice');/// The original price of goods
            $table->integer('discountprice');///Price discounts on products
            $table->integer('pricesbefore');//Bidet deleted
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->integer('reversenumber');
            $table->text('property');
            $table->text('commit');
            $table->integer('tell');
            $table->string('data');
            $table->integer('catprodcts');
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('commodities');
    }
}
