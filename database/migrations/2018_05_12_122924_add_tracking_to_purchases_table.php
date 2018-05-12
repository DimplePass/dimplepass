<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTrackingToPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('purchases', function (Blueprint $table) {
            //
            $table->string('referring_url')->nullable()->after('stripe_status');
            $table->string('campaign_id')->nullable()->after('referring_url');
            $table->integer('num_visits')->nullable()->after('campaign_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchases', function (Blueprint $table) {
            //
            $table->dropColumn('referring_url');
            $table->dropColumn('campaign_id');
            $table->dropColumn('num_visits');
        });
    }
}
