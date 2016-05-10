<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeguridadSocialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seguridad_social', function(Blueprint $table)
		{
			$table->increments('id_seguridad_soc');
			$table->integer('id_persona')->nullable()->index('segus_id_per_fk');
			$table->integer('id_tipo_seguridad_soc')->nullable()->index('segus_id_tipo_ss_fk');
			$table->integer('id_control_contrato')->nullable()->index('segus_id_contr_fk');
			$table->integer('id_organizacion')->nullable()->index('segus_id_org_fk');
			$table->char('categoria_afiliado', 1)->nullable();
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
		Schema::drop('seguridad_social');
	}

}
