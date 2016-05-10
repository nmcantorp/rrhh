<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleContratoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_contrato', function(Blueprint $table)
		{
			$table->increments('id_det_control_contrato');
			$table->integer('id_control_contrato')->index('dcont_id_cont_fk');
			$table->dateTime('fecha_actualizacion')->nullable();
			$table->dateTime('fecha_finalizacion')->nullable();
			$table->float('salario', 19, 0)->nullable();
			$table->text('observaciones', 16777215)->nullable();
			$table->integer('id_tipo_modificacion')->nullable()->index('dcont_id_tmodf_fk');
			$table->string('num_modificacion', 20)->nullable();
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
		Schema::drop('detalle_contrato');
	}

}
