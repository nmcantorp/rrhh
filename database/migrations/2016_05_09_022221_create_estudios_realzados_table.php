<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstudiosRealzadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudios_realzados', function(Blueprint $table)
		{
			$table->increments('id_estudio_realizado');
			$table->integer('id_organizacion')->nullable()->index('estur_id_orga_fk');
			$table->integer('id_titulo_profesional')->nullable()->index('estur_id_titup_fk');
			$table->integer('id_tipo_formacion')->nullable()->index('estur_id_tipof_fk');
			$table->date('fecha_ingreso')->nullable();
			$table->date('fecha_egresado')->nullable();
			$table->integer('semeste_cursado')->nullable();
			$table->string('estado', 15)->nullable();
			$table->dateTime('fecha_creacion')->nullable();
			$table->string('usuario_creador', 20)->nullable();
			$table->dateTime('fecha_modificacion')->nullable();
			$table->string('fecha_creador', 20)->nullable();
			$table->integer('id_persona')->unsigned()->nullable();
			$table->date('anyo_egresado')->nullable();
			$table->string('titulo_obtenido', 300)->nullable();
			$table->text('descripcion_titulo', 16777215)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estudios_realzados');
	}

}
