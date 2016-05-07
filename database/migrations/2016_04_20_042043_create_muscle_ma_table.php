<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuscleMaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muscle_ma', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('machine_id');
			$table->integer('muscle_id');
			
			$table->foreign('machine_id')
				->references('id')->on('machines')
				->onDelete('cascade');
			
			$table->foreign('muscle_id')
				->references('id')->on('muscles')
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
        Schema::drop('muscle_ma');
    }
}
