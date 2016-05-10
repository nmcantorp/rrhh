<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuncionContratoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcion_contrato', function(Blueprint $table)
		{
			$table->increments(' id_funcion_contrato');
			$table->integer('id_contrato')->nullable()->index('fcon_id_cont_fk');
			$table->integer('id_funcion_laboral')->nullable()->index('fcon_id_fper_fk');
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
		Schema::drop('funcion_contrato');
	}

}
