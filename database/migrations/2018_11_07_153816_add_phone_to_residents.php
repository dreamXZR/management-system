<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhoneToResidents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('residents', function (Blueprint $table) {
            $table->string('phone',50)->nullable()->after('unit')->comment('联系电话');
            $table->string('tag',30)->nullable()->after('phone')->comment('职务标签');
            $table->string('other')->nullable()->after('tag')->comment('备注');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('residents', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('tag');
            $table->dropColumn('other');
        });
    }
}
