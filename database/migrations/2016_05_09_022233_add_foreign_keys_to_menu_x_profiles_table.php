<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMenuXProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('menu_x_profiles', function(Blueprint $table)
		{
			$table->foreign('id_menu', 'menu_x_profiles_ibfk_1')->references('id_menu')->on('menu')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('menu_x_profiles', function(Blueprint $table)
		{
			$table->dropForeign('menu_x_profiles_ibfk_1');
		});
	}

}
