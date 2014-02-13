<?php

use Illuminate\Database\Migrations\Migration;

class AddWorkerData extends Migration {

			Schema::create('workers', function($table){
			$table->increments('id');
			$table->string('username');
			$table->string('title');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('phone_number');
			$table->string('email');
			$table->string('street');
			$table->string('city');
			$table->string('state');
			$table->integer('zip');
			$table->text('availability');
			$table->integer('hourly_rate');
			$table->text('work_orders');
			$table->timestamps();

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('workers')->insert(array(
			'id' => '1',
			'username' => 'jtava01',
			'title' => 'Admiral',
			'worker_id' => '100',);
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