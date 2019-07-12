<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vendor_id')->unsigned();
            $table->integer('vendor_type_id')->unsigned();
            $table->timestamps();
            $table->unique(['vendor_id','vendor_type_id'],'ix_vendor_type_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_type');
    }
}
