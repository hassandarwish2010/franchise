<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('en_title');
            $table->string('ar_title');
            $table->text('en_details');
            $table->text('ar_details');
            $table->string('image');
            $table->string('permalink')->comment('its for seo');
            $table->string('keywords')->comment('its for seo');
            $table->text('description')->comment('its for seo');
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
        Schema::dropIfExists('news');
    }
}
