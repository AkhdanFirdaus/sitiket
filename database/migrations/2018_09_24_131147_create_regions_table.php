<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::table('users', function ($table) {
            $table->mediumText('address');
            $table->integer('region_id')->unsigned()->after('address');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
        Schema::table('users', function ($table) {
            $table->dropForeign('region_id');
            $table->dropColumn('region_id');
            $table->dropColumn('address');
        });
    }
}
