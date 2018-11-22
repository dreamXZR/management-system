<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInformationIdToRegisterTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('register_tables', function (Blueprint $table) {
            $table->unsignedInteger('information_id')->nullable()->after('id')->comment('所属住户');
            $table->string('main')->nullable()->after('images')->comment('主要责任住户id');
            $table->string('secondary')->nullable()->after('main')->comment('主要责任住户id');
            $table->string('join')->nullable()->after('secondary')->comment('主要责任住户id');
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
            $table->dropColumn('information_id');
            $table->dropColumn('main');
            $table->dropColumn('secondary');
            $table->dropColumn('join');
        });
    }
}
