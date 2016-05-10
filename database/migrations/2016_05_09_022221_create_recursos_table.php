<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recursos', function(Blueprint $table)
		{
			$table->increments('id_recursos');
			$table->integer('id_tipo_recurso')->nullable()->index('recu_tipo_rec_fk');
			$table->string('desc_recurso', 80)->nullable();
			$table->string('referencia', 80)->nullable();
			$table->char('asignado', 1)->nullable();
			$table->char('activo', 1)->nullable();
			$table->text('observaciones', 16777215)->nullable();
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
		Schema::drop('recursos');
	}

}
