<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEventIdToOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('event_id')->unsigned()->after('user_id');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->integer('event_id')->unsigned()->after('id');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('event_id');
            $table->dropColumn('event_id');
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign('event_id');
            $table->dropColumn('event_id');
        });
    }
}
