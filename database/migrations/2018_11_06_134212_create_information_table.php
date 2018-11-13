<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('present_address')->comment('现居住地址');
            $table->string('residence_address')->comment('户籍所在地');
            $table->string('phone')->comment('联系电话');
            $table->tinyInteger('residence_status')->comment('户籍性质 农业..');
            $table->tinyInteger('house_people')->comment('房屋使用人 业主、租户..');
            $table->string('house_status',30)->nullable()->comment('房屋状态 户在、不在...');
            $table->string('people',30)->nullable()->comment('住户情况 空巢老人...');
            $table->string('situation')->nullable()->comment('家庭状况');
            $table->string('other')->nullable()->comment('备注');
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
        Schema::dropIfExists('information');
    }
}
