<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('banner');
            $table->unsignedBigInteger('travel_catelogs_id');
            $table->foreign('travel_catelogs_id')->references('id')->on('travel_catelogs');
            $table->longText('f_desc');
            $table->string('b_image');
            $table->longText('s_desc');
            $table->string('f_img');
            $table->string('s_img');
            $table->string('t_img');
            $table->longText('t_desc');
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
        Schema::dropIfExists('cities');
    }
};
