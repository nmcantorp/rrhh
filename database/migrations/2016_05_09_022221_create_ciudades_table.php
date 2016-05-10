<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCiudadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ciudades', function(Blueprint $table)
		{
			$table->increments('id_ciudad');
			$table->string('nombre_ciudad', 100);
			$table->integer('cod_postal')->nullable();
			$table->integer('id_departamento')->nullable()->index('ciud_id_dept_fk');
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
		Schema::drop('ciudades');
	}

}
