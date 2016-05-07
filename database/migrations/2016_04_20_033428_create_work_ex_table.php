<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkExTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_ex', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('workout_id');
			$table->foreign('workout_id')
				->references('id')->on('workouts')
				->onDelete('cascade');
			$table->integer('exercise_id');
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
        Schema::drop('work_ex');
    }
}
