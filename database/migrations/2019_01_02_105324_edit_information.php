<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('information', function (Blueprint $table) {
            $table->integer('building')->after('present_address')->default(0)->comment('楼');
            $table->integer('door')->after('building')->default(0)->comment('门');
            $table->integer('no')->after('door')->default(0)->comment('户');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('information', function (Blueprint $table) {
            $table->dropColumn('building');
            $table->dropColumn('door');
            $table->dropColumn('no');
        });
    }
}
