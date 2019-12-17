<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeToRegidterTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('register_tables', function (Blueprint $table) {
            $table->string('resident_type')->nullable()->after('phone')->comment('居民类别');
            $table->string('charge')->after('number')->nullable()->comment('接访接电人');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('register_tables', function (Blueprint $table) {
            $table->dropColumn('resident_type');
            $table->dropColumn('charge');
        });
    }
}
