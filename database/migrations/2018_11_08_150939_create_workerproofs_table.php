<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkerProofsTable extends Migration 
{
	public function up()
	{
		Schema::create('worker_proofs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->index()->comment('姓名');
            $table->string('id_number', 30)->index()->comment('身份证号');
            $table->string('present_address')->comment('现居住地');
            $table->string('phone', 20)->comment('联系电话');
            $table->string('worker_content')->comment('就业内容');
            $table->string('worker_place')->comment('就业地点');
            $table->string('child_name', 20)->nullable()->comment('子女姓名');
            $table->boolean('child_sex')->nullable()->comment('子女性别');
            $table->string('child_id_number', 30)->nullable()->comment('子女身份证号');
            $table->string('number', 50)->index()->comment('编号');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('worker_proofs');
	}
}
