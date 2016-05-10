<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReferenciasPersonalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('referencias_personales', function(Blueprint $table)
		{
			$table->foreign('id_persona', 'fk_ref_personal')->references('id_persona')->on('personas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('referencias_personales', function(Blueprint $table)
		{
			$table->dropForeign('fk_ref_personal');
		});
	}

}
