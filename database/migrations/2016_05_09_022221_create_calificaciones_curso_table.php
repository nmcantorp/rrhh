<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalificacionesCursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calificaciones_curso', function(Blueprint $table)
		{
			$table->increments('id_calificacion_curso');
			$table->integer('id_matricula')->nullable()->index('calf_id_matrc_fk');
			$table->integer('id_titulo_profesional')->nullable()->index('calf_id_titup_fk');
			$table->integer('id_nota_calificacion')->nullable()->index('calf_id_notac_fk');
			$table->char('aprobo_curso', 1)->nullable();
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
		Schema::drop('calificaciones_curso');
	}

}
