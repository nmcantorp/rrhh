<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateValoresDefinicionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('valores_definiciones', function(Blueprint $table)
		{
			$table->increments('id_valor_def');
			$table->integer('id_tipo_definicion')->nullable();
			$table->string('valor_definicion', 80)->nullable();
			$table->text('desc_valor_def', 16777215)->nullable();
			$table->string('tipo_valor_def', 80);
			$table->char('activo', 1)->nullable();
			$table->dateTime('fecha_creacion')->nullable();
			$table->string('usuario_creador', 80)->nullable();
			$table->dateTime('fecha_modificacion')->nullable();
			$table->string('usuario_modificador', 80)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('valores_definiciones');
	}

}
