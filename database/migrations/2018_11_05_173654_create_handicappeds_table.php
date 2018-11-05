<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHandicappedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handicappeds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('information_id')->comment('所属住户信息');
            $table->string('name',20)->comment('姓名');
            $table->string('number',50)->comment('残疾人证号');
            $table->string('type',30)->comment('残疾类别');
            $table->string('level',30)->comment('残疾等级');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('handicappeds');
    }
}
