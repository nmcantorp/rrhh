<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignacionRecursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignacion_recursos', function(Blueprint $table)
		{
			$table->increments('id_asignacion');
			$table->integer('id_control_contrato')->nullable()->index('arecu_id_ccont_fk');
			$table->integer('id_recurso')->nullable()->index('arecu_id_recu_fk');
			$table->dateTime('fecha_asignacion')->nullable();
			$table->dateTime('fecha_devolucion')->nullable();
			$table->float('avaluo', 19)->nullable();
			$table->char('activo', 1)->nullable();
			$table->text('observaciones', 16777215)->nullable();
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
		Schema::drop('asignacion_recursos');
	}

}
