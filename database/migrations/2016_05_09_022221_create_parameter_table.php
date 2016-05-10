<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParameterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parameter', function(Blueprint $table)
		{
			$table->integer('id_par', true);
			$table->string('parameter_key');
			$table->string('parameter_value');
			$table->string('description');
			$table->integer('show_parameter');
			$table->boolean('parameter_type');
			$table->dateTime('created');
			$table->dateTime('modified')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parameter');
	}

}
