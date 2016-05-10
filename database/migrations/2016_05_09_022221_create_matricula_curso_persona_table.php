<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatriculaCursoPersonaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matricula_curso_persona', function(Blueprint $table)
		{
			$table->increments('id_matricula');
			$table->integer('id_persona')->nullable()->index('matrcp_id_pers_fk');
			$table->integer('id_curso')->nullable()->index('matrcp_id_curs_fk');
			$table->date('fecha_matricula')->nullable();
			$table->char('estado_matricula', 1)->nullable();
			$table->float('aprobado', 3, 1)->nullable();
			$table->dateTime('fecha_creacion')->nullable();
			$table->string('usuario_creador', 20)->nullable();
			$table->dateTime('fecha_modificacion')->nullable();
			$table->string('fecha_creador', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('matricula_curso_persona');
	}

}
