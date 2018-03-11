<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index('ix_userid');
            $table->string('stripe_credit_card_id')->nullable();
            $table->string('stripe_customer_id')->nullable();
            $table->string('brand')->nullable();
            $table->string('last4');
            $table->string('exp_month');
            $table->string('exp_year');
            $table->string('code');
            $table->tinyInteger('default')->default(0);
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
        Schema::dropIfExists('credit_cards');
    }
}
