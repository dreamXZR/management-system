<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesToLetterProofs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('letter_proofs', function (Blueprint $table) {
            $table->text('images')->nullable()->after('basis')->comment('上传相关图片');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('letter_proofs', function (Blueprint $table) {
            $table->dropColumn('images');
        });
    }
}
