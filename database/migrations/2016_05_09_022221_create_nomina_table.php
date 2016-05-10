<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNominaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nomina', function(Blueprint $table)
		{
			$table->increments('id_nomina');
			$table->integer('id_control_contrato')->nullable()->index('nomi_id_contr_fk');
			$table->date('fecha_consignacion')->nullable();
			$table->integer('valor_consignado')->unsigned()->nullable();
			$table->integer('id_tipo_concepto')->nullable()->index('nomi_id_tconc_fk');
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
		Schema::drop('nomina');
	}

}
