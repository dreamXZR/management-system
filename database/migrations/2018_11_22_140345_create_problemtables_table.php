<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemTablesTable extends Migration 
{
	public function up()
	{
		Schema::create('problem_tables', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->index();
            $table->unsignedInteger('information_id');
            $table->boolean('sex');
            $table->dateTime('call_time')->index();
            $table->string('address', 100)->index();
            $table->string('phone', 20)->index();
            $table->text('call_content')->nullable();
            $table->text('back_content')->nullable();
            $table->string('other')->nullable();
            $table->text('images')->nullable();
            $table->string('main')->nullable();
            $table->string('secondary')->nullable();
            $table->string('join')->nullable();
            $table->boolean('is_finish')->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('problem_tables');
	}
}
