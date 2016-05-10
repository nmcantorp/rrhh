<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->increments('id_persona');
			$table->string('doc_identidad', 15)->unique('pers_doc_ident_uq');
			$table->date('fecha_nac');
			$table->string('primer_nom', 20);
			$table->string('segundo_nom', 20)->nullable();
			$table->string('primer_ape', 20);
			$table->string('segundo_ape', 20)->nullable();
			$table->string('nombre_completo', 80)->nullable();
			$table->char('genero', 1);
			$table->integer('id_departamento')->nullable();
			$table->integer('id_ciudad')->nullable();
			$table->string('telefono', 10)->nullable();
			$table->string('celular', 10)->nullable();
			$table->string('direccion', 100)->nullable();
			$table->string('email', 100)->nullable();
			$table->char('activo', 1)->nullable()->default('S');
			$table->dateTime('fecha_creacion')->nullable();
			$table->string('usuario_creador', 20)->nullable();
			$table->dateTime('fecha_modificacion')->nullable();
			$table->string('fecha_creador', 20)->nullable();
			$table->string('foto')->nullable();
			$table->bigInteger('id_plat_virtual')->nullable();
			$table->string('username', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personas');
	}

}
