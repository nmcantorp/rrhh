<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignacionLaboralTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignacion_laboral', function(Blueprint $table)
		{
			$table->increments('id_asignacion_lab');
			$table->integer('id_control_contrato')->nullable()->index('asigl_id_contr_fk');
			$table->integer('id_cargo')->nullable()->index('asigl_id_carg_fk');
			$table->integer('id_tipo_departamento')->nullable()->index('asigl_id_tdept_fk');
			$table->char('activo', 1)->nullable();
			$table->dateTime('fecha_creacion')->nullable();
			$table->string('usuario_creador', 20)->nullable();
			$table->dateTime('fecha_modificacion')->nullable();
			$table->string('fecha_creador', 20)->nullable();
			$table->integer('id_sucursal')->nullable();
			$table->date('fecha_ini')->nullable();
			$table->date('fecha_fin')->nullable();
			$table->integer('id_persona')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asignacion_laboral');
	}

}
