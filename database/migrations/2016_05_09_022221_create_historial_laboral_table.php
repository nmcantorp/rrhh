<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistorialLaboralTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historial_laboral', function(Blueprint $table)
		{
			$table->increments('id_historial_lab');
			$table->integer('id_persona')->nullable()->index('histl_id_per_fk');
			$table->integer('id_organizacion')->nullable()->index('histl_id_org_fk');
			$table->integer('id_cargo')->nullable();
			$table->integer('id_tipo_departamento')->nullable()->index('histl_id_tdepto_fk');
			$table->date('fecha_ingreso')->nullable();
			$table->date('fecha_retiro')->nullable();
			$table->integer('salario_devengado')->nullable();
			$table->string('jefe_inmediato', 80)->nullable();
			$table->integer('id_cargo_jefe')->nullable();
			$table->integer('id_tipo_depto_jefe')->nullable()->index('histl_id_tdeptojef_fk');
			$table->dateTime('fecha_creacion')->nullable();
			$table->string('usuario_creador', 20)->nullable();
			$table->dateTime('fecha_modificacion')->nullable();
			$table->string('fecha_creador', 20)->nullable();
			$table->string('telcontacto', 10)->nullable();
			$table->string('extension', 10)->nullable();
			$table->index(['id_cargo','id_cargo_jefe'], 'histl_id_cargo_jef_fk');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('historial_laboral');
	}

}
