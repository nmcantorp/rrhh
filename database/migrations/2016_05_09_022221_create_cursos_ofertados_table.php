<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursosOfertadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursos_ofertados', function(Blueprint $table)
		{
			$table->increments('id_curso');
			$table->integer('id_area_conocimiento')->nullable()->index('curso_id_areac_fk');
			$table->string('nombre_curso', 80)->nullable();
			$table->integer('cupos_disponibles')->nullable();
			$table->integer('duracion')->nullable();
			$table->date('fecha_ini_curso')->nullable();
			$table->date('fecha_fin_curso')->nullable();
			$table->char('activo', 1)->nullable();
			$table->text('observaciones', 16777215)->nullable();
			$table->dateTime('fecha_creacion')->nullable();
			$table->string('usuario_creador', 20)->nullable();
			$table->dateTime('fecha_modificacion')->nullable();
			$table->string('fecha_creador', 20)->nullable();
			$table->bigInteger('id_course');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cursos_ofertados');
	}

}
