<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrathProofsTable extends Migration 
{
	public function up()
	{
		Schema::create('drath_proofs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->index();
            $table->string('id_number', 30)->index();
            $table->string('residence_address', 100);
            $table->string('present_address', 100)->nullable();
            $table->string('applicant', 30);
            $table->date('death_date');
            $table->string('death_address', 100)->nullable();
            $table->tinyInteger('death_relation');
            $table->string('applicant_id_number', 30);
            $table->string('agent', 20)->nullable();
            $table->string('application_relation', 20)->nullable();
            $table->string('agent_id_number', 30)->nullable();
            $table->string('other', 255)->nullable();
            $table->string('number', 50)->index();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('drath_proofs');
	}
}
