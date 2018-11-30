<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsReplaceToHandicappeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('handicappeds', function (Blueprint $table) {
            $table->boolean('is_replace')->default(0)->after('level')->comment('是否被替换');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('handicappeds', function (Blueprint $table) {
            $table->dropColumn('is_replace');
        });
    }
}
