<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perfiles', function(Blueprint $table)
		{
			$table->increments('id_perfil');
			$table->integer('id_cargo')->nullable()->index('perf_id_cargo_fk');
			$table->text('desc_perfil', 16777215)->nullable();
			$table->integer('id_titulo_laboral')->nullable()->index('perf_id_titup_fk');
			$table->text('funciones', 16777215)->nullable();
			$table->char('escalafon', 1)->nullable();
			$table->float('minimo_contratacion', 19)->nullable();
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
		Schema::drop('perfiles');
	}

}
