<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paises', function(Blueprint $table)
		{
			$table->increments('id_pais');
			$table->string('nombre_pais', 100);
			$table->integer('cod_postal')->nullable();
			$table->dateTime('fecha_creacion')->nullable();
			$table->string('usuario_creador', 30)->nullable();
			$table->dateTime('fecha_modificacion')->nullable();
			$table->string('usuario_modificador', 30)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('paises');
	}

}
