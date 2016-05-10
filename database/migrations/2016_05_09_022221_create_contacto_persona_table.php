<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactoPersonaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacto_persona', function(Blueprint $table)
		{
			$table->increments('id_contacto_per');
			$table->integer('id_persona')->nullable()->index('contp_id_pers_fk');
			$table->integer('id_ciudad')->nullable()->index('contp_id_ciud_fk');
			$table->integer('id_tipo_contacto')->nullable()->index('contp_id_tipoc_fk');
			$table->string('datos_contacto', 80)->nullable();
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
		Schema::drop('contacto_persona');
	}

}
