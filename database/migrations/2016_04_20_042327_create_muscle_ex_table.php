<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuscleExTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muscle_ex', function (Blueprint $table) {
            $table->increments('id');
			table->integer('exercise_id');
			$table->integer('muscle_id');
			
			$table->foreign('exercise_id')
				->references('id')->on('exercises')
				->onDelete('cascade');
			
			$table->foreign('muscle_id')
				->references('id')->on('muscles')
				->onDelete('cascade');
            $table->timestamps();
			
			
			
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
        Schema::drop('muscle_ex');
    }
}
