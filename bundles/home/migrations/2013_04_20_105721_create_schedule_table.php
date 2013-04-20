<?php

class Home_Create_Schedule_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::create('schedules', function ($table) {
                    $table->increments('id');
                    $table->string('satellite_id',100);
                    $table->string('target')->nullable();
                     $table->string('target_name')->nullable();
                     $table->string('observation_id')->nullable();
                    $table->string('revolution')->nullable();
                    $table->string('ra')->nullable();
                    $table->string('dec')->nullable();
                    $table->string('start_time')->nullable();
                    $table->string('end_time')->nullable();
                    $table->timestamps();
                });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
            Schema::drop('schedules');
	}

}