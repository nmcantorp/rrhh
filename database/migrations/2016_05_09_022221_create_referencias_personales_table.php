<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReferenciasPersonalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('referencias_personales', function(Blueprint $table)
		{
			$table->increments('id_ref_personal');
			$table->integer('id_persona')->unsigned()->nullable()->index('fk_ref_personal_idx');
			$table->char('tipo_referencia', 1)->default('P');
			$table->string('nombre_ref', 200);
			$table->string('telefono_ref', 30)->nullable();
			$table->string('celular_ref', 30)->nullable();
			$table->string('direccion_ref', 100)->nullable();
			$table->integer('id_tipo_parentesco')->nullable();
			$table->char('activo', 1)->nullable();
			$table->date('fecha_creacion')->nullable();
			$table->string('usuario_creador', 30)->nullable();
			$table->date('fecha_modificacion')->nullable();
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
		Schema::drop('referencias_personales');
	}

}
