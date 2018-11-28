<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReferences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('residents',function(Blueprint $table){
            $table->foreign('information_id')->references('id')->on('information')->onDelete('cascade');
        });
         Schema::table('handicappeds',function(Blueprint $table){
            $table->foreign('information_id')->references('id')->on('information')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('residents',function(Blueprint $table){
            $table->dropForeign(['information_id']);
         });
         Schema::table('handicappeds',function(Blueprint $table){
            $table->dropForeign(['information_id']);
         });
    }
}
