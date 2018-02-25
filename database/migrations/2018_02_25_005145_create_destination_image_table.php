<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination_image', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('destination_id')->unsigned();
            $table->integer('image_id')->unsigned();
            $table->timestamps();
            $table->unique(['destination_id','image_id'],'ix_destination_image_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destination_image');
    }
}
