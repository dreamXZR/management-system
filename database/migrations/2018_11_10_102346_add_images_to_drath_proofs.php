<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesToDrathProofs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drath_proofs', function (Blueprint $table) {
            $table->text('images')->nullable()->after('other')->comment('上传相关图片');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drath_proofs', function (Blueprint $table) {
            $table->dropColumn('images');
        });
    }
}
