<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCertificacionPersonaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('certificacion_persona', function(Blueprint $table)
		{
			$table->increments('id_certificacion');
			$table->date('fecha_certif')->nullable();
			$table->text('desc_certif', 16777215)->nullable();
			$table->integer('id_persona_sol')->nullable()->index('certf_id_per_sol_fk');
			$table->integer('id_organizacion')->nullable()->index('certf_id_orga_fk');
			$table->integer('id_persona_firma')->nullable()->index('certf_id_per_firm_fk');
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
		Schema::drop('certificacion_persona');
	}

}
