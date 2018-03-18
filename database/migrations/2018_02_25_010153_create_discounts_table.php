<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vendor_id')->unsigned()->index('ix_vendor_id');
            $table->integer('pass_id')->unsigned()->index('ix_pass_id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('hours',500)->nullable();
            $table->string('rates',500)->nullable();
            $table->string('fine_print')->nullable();
            $table->integer('limit')->nullable();
            $table->decimal('percent',13)->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip',10)->nullable();
            $table->tinyInteger('active')->default(1);
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            $table->string('url')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->tinyInteger('reservations_required')->default(0);
            $table->tinyInteger('limited_availability')->default(0);
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
        Schema::dropIfExists('discounts');
    }
}
