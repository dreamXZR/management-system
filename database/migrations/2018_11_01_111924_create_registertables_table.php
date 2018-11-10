<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTablesTable extends Migration 
{
	public function up()
	{
		Schema::create('register_tables', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->index()->comment('来电者姓名');
            $table->boolean('sex')->comment('性别');
            $table->dateTime('call_time')->index()->comment('来电时间');
            $table->string('address', 100)->index()->comment('家庭住址');
            $table->string('phone', 20)->index()->comment('联系电话');
            $table->text('call_content')->nullable()->comment('来电内容');
            $table->text('back_content')->nullable()->comment('办理结果');
            $table->string('other')->nullable()->comment('备注');
            $table->string('number', 50)->index()->comment('编号');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('register_tables');
	}
}
