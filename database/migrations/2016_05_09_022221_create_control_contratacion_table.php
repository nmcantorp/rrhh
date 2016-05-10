<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateControlContratacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('control_contratacion', function(Blueprint $table)
		{
			$table->increments('id_control_contrato');
			$table->integer('id_persona')->nullable()->index('contc_id_pers_fk');
			$table->integer('id_tipo_contrato')->nullable()->index('contc_id_tipoc_fk');
			$table->decimal('ss_pctje_empresa', 4)->nullable();
			$table->decimal('ss_pctje_empleado', 4)->nullable();
			$table->date('fecha_ini_contrato')->nullable();
			$table->date('fecha_fin_contrato')->nullable();
			$table->char('gana_comision', 1)->nullable();
			$table->decimal('pctje_comision', 4)->nullable();
			$table->text('observaciones', 16777215)->nullable();
			$table->char('activo', 1)->nullable();
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
		Schema::drop('control_contratacion');
	}

}
