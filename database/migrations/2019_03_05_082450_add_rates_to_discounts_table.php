<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRatesToDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('discounts', function (Blueprint $table) {
            $table->decimal('regular_price_senior',13, 2)->nullable()->after('rates');
            $table->decimal('regular_price_child',13, 2)->nullable()->after('rates');
            $table->decimal('regular_price_adult',13, 2)->nullable()->after('rates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('discounts', function (Blueprint $table) {
            $table->dropColumn('regular_price_senior');
            $table->dropColumn('regular_price_child');
            $table->dropColumn('regular_price_adult');
        });
    }
}
