<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkerProofsTable extends Migration 
{
	public function up()
	{
		Schema::create('worker_proofs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->index();
            $table->string('id_number', 30)->index();
            $table->string('present_address');
            $table->string('phone', 20);
            $table->string('worker_content');
            $table->string('worker_place');
            $table->string('child_name', 20)->nullable();
            $table->boolean('child_sex')->nullable();
            $table->string('child_id_number', 30)->nullable();
            $table->string('number', 50)->index();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('worker_proofs');
	}
}
