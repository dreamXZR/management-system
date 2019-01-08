<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChargeToLetterProofs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('letter_proofs', function (Blueprint $table) {
            $table->string('charge',50)->after('number')->comment('负责人');
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
            $table->dropColumn('charge');
        });
    }
}
