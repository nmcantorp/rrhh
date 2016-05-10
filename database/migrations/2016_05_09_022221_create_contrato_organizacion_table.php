<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratoOrganizacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contrato_organizacion', function(Blueprint $table)
		{
			$table->increments('id_contrato_emp');
			$table->integer('id_emp_contratante')->nullable()->index('contor_id_org_fk');
			$table->date('fecha_ini_contrato')->nullable();
			$table->date('fecha_fin_contrato')->nullable();
			$table->string('desc_contrato', 100)->nullable();
			$table->integer('id_rep_legal')->nullable()->index('contor_id_repleg_fk');
			$table->string('estado', 20)->nullable();
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
		Schema::drop('contrato_organizacion');
	}

}
