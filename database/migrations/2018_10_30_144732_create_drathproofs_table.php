<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrathProofsTable extends Migration 
{
	public function up()
	{
		Schema::create('drath_proofs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->index()->comment('姓名');
            $table->string('id_number', 30)->index()->comment('身份证号');
            $table->string('residence_address', 100)->comment('户籍地址');
            $table->string('present_address', 100)->nullable()->comment('现住地址');
            $table->string('applicant', 30)->comment('申请人');
            $table->date('death_date')->comment('死亡时间');
            $table->string('death_address', 100)->nullable()->comment('死亡地点');
            $table->tinyInteger('death_relation')->comment('与死者关系');
            $table->string('applicant_id_number', 30)->comment('申请人身份证号');
            $table->string('agent', 20)->nullable()->comment('委托代理人');
            $table->string('application_relation', 20)->nullable()->comment('与申请人关系');
            $table->string('agent_id_number', 30)->nullable()->comment('委托代理人身份证号');
            $table->string('other', 255)->nullable()->comment('其他');
            $table->string('number', 50)->index()->comment('编号');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('drath_proofs');
	}
}
