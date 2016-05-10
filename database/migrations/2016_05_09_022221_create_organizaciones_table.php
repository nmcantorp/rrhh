<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganizacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organizaciones', function(Blueprint $table)
		{
			$table->increments('id_organizacion');
			$table->integer('id_organizacion_padre')->nullable()->index('orga_id_orgpad_fk');
			$table->integer('id_sec_financiero')->nullable()->index('orga_id_secfin_fk');
			$table->string('nit_empresa', 20)->nullable()->unique('orga_nit_empr_uk');
			$table->string('nombre_empresa', 80);
			$table->string('direccion', 80)->nullable();
			$table->string('telefono_pbx', 15)->nullable();
			$table->string('web_site', 200)->nullable();
			$table->string('sigla', 15)->nullable();
			$table->char('anyo_fundacion', 4)->nullable();
			$table->char('clasificacion', 2)->nullable();
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
		Schema::drop('organizaciones');
	}

}
