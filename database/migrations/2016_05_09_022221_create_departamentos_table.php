<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departamentos', function(Blueprint $table)
		{
			$table->increments('id_departamento');
			$table->string('nombre_departamento', 100);
			$table->integer('cod_postal')->nullable();
			$table->integer('id_pais')->nullable()->index('dept_id_pais_fk');
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
		Schema::drop('departamentos');
	}

}
