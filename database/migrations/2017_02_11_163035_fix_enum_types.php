<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixEnumTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('charleston', function (Blueprint $table) {
            $table->dropColumn('business_type');
        });


        Schema::table('charleston', function (Blueprint $table) {
            $table->enum('business_type', ['restaurant', 'bar', 'shop', 'hotel', 'sightseeing']);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
