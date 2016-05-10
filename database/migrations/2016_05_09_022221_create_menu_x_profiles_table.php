<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuXProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menu_x_profiles', function(Blueprint $table)
		{
			$table->integer('id_menu_profile', true);
			$table->integer('id_menu')->index('fk_menu_x_profiles_menu1_idx');
			$table->integer('id_profile');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menu_x_profiles');
	}

}
