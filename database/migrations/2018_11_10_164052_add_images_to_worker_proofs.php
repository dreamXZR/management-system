<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesToWorkerProofs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('worker_proofs', function (Blueprint $table) {
            $table->text('images')->nullable()->after('child_id_number')->comment('上传相关图片');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('worker_proofs', function (Blueprint $table) {
             $table->dropColumn('images');
        });
    }
}
