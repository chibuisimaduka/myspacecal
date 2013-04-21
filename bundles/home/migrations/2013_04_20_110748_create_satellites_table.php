<?php

class Home_Create_Satellites_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
             Schema::create('satellites', function ($table) {
                    $table->increments('id');                   
                    $table->string('name');
                     $table->string('image_url');
                     $table->string('companies')->nullable();
                    $table->string('orbit_height')->nullable();
                     $table->string('type');
                    $table->text('description')->nullable(); 
                     $table->text('website')->nullable();  
                    $table->string('launch_date')->nullable();
                    $table->string('launch_location')->nullable();
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
           Schema::drop('satellites');
	}

}