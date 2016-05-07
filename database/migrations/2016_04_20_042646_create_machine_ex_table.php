<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMachineExTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machine_ex', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('machine_id');
			$table->integer('exercise_id');
			
			$table->foreign('exercise_id')
				->references('id')->on('exercises')
				->onDelete('cascade');
			
			$table->foreign('machine_id')
				->references('id')->on('machines')
				->onDelete('cascade');
			
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
        Schema::drop('machine_ex');
    }
}
