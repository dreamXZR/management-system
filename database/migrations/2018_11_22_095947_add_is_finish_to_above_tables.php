<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsFinishToAboveTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('above_tables', function (Blueprint $table) {
            $table->unsignedInteger('information_id')->after('id');
            $table->boolean('is_finish')->default(0)->after('number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('above_tables', function (Blueprint $table) {
            $table->dropColumn('information_id');
            $table->dropColumn('is_finish');
        });
    }
}
