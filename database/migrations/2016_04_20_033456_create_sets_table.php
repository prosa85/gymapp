<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sets', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('work_ex_id');
			$table->foreign('work_ex_id')
				->references('id')->on('work_ex')
				->onDelete('cascade');
			$table->integer('weight');
			$table->integer('reps');
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
        Schema::drop('sets');
    }
}
