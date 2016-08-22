<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasejsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masejs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('commoditie_id')->unsigned();
            $table->foreign('commoditie_id')->references('id')->on('commodities')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('username');
            $table->string('email');
            $table->integer('tell');
            $table->text('text');
            $table->integer('flag')->default(0);;
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
        Schema::drop('masejs');
    }
}
