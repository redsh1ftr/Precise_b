<?php

use Illuminate\Database\Migrations\Migration;

class CallLogList extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('call_log', function($table){
			$table->increments('id');
			$table->string('business_name');
			$table->string('phone');
			$table->string('answered');
			$table->string('office_manager');
			$table->string('email');
			$table->string('hours');
			$table->string('call_notes');
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
		//
	}

}