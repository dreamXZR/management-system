<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('information_id')->comment('所属住户信息');
            $table->string('name',20)->comment('居民姓名');
            $table->string('relationship',20)->comment('与户主关系');
            $table->boolean('sex')->comment('性别');
            $table->string('nation',30)->comment('民族');
            $table->date('birthday')->comment('生日');
            $table->tinyInteger('culture')->comment('文化程度');
            $table->tinyInteger('face')->comment('政治面貌');
            $table->tinyInteger('marriage')->comment('婚姻状况');
            $table->tinyInteger('identity')->comment('身份类别');
            $table->string('hobby',50)->comment('特长');
            $table->string('id_number',50)->comment('身份证号');
            $table->string('unit',100)->comment('工作单位');
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
        Schema::dropIfExists('residents');
    }
}
