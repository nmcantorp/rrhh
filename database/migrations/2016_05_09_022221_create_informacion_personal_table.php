<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformacionPersonalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('informacion_personal', function(Blueprint $table)
		{
			$table->increments('id_info_personal');
			$table->integer('id_persona')->nullable()->index('infop_id_pers_fk');
			$table->integer('id_tipo_relacion')->nullable()->index('infop_id_tipor_fk');
			$table->string('nombre_persona', 80)->nullable();
			$table->string('tel_contacto', 15)->nullable();
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
		Schema::drop('informacion_personal');
	}

}
