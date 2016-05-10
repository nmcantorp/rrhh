<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTitulosProfesionalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('titulos_profesionales', function(Blueprint $table)
		{
			$table->increments('id_titulo_profesional');
			$table->integer('id_area_conocimiento')->nullable()->index('titup_id_areac_fk');
			$table->string('titulo_profesional', 80)->nullable();
			$table->text('desc_titulo_profesional', 16777215)->nullable();
			$table->date('fecha_registro')->nullable();
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
		Schema::drop('titulos_profesionales');
	}

}
