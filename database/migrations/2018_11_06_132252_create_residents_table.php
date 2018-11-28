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
            $table->unsignedInteger('information_id')->comment('所属住户信息');
            $table->string('name',20)->comment('居民姓名');
            $table->string('relationship',20)->comment('与户主关系');
            $table->boolean('sex')->comment('性别');
            $table->string('nation',30)->comment('民族');
            $table->date('birthday')->comment('生日');
            $table->tinyInteger('culture')->nullable()->comment('文化程度');
            $table->tinyInteger('face')->nullable()->comment('政治面貌');
            $table->tinyInteger('marriage')->nullable()->comment('婚姻状况');
            $table->tinyInteger('identity')->nullable()->comment('身份类别');
            $table->string('hobby',200)->nullable()->comment('特长');
            $table->string('id_number',50)->comment('身份证号');
            $table->string('unit',200)->nullable()->comment('工作单位');
            $table->timestamps();
            $table->engine = 'InnoDB';
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
