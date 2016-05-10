<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratosPersEmpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contratos_pers_emp', function(Blueprint $table)
		{
			$table->integer('id_cont_per_emp')->default(0)->primary();
			$table->date('fecha_contrato')->nullable();
			$table->integer('id_persona')->nullable()->index('conpo_id_pers_fk');
			$table->integer('id_contrato_emp')->nullable()->index('conpo_id_contem_fk');
			$table->date('fecha_ini')->nullable();
			$table->date('fecha_fin')->nullable();
			$table->float('costo_personal', 19)->nullable();
			$table->float('cobro_empresarial', 19)->nullable();
			$table->float('pcje_salud', 2)->unsigned()->nullable();
			$table->float('pcje_pencion', 2)->unsigned()->nullable();
			$table->char('recibe_comision', 1)->nullable();
			$table->float('pcje_comision', 2)->nullable();
			$table->integer('id_perfil')->nullable()->index('conpo_id_perfil_fk');
			$table->char('estado', 1)->nullable();
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
		Schema::drop('contratos_pers_emp');
	}

}
