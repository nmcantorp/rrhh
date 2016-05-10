<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAntecedentesLaboralesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('antecedentes_laborales', function(Blueprint $table)
		{
			$table->increments('id_antecedente');
			$table->integer('id_persona')->nullable()->index('antel_id_per_fk');
			$table->integer('id_tipo_antecedente')->nullable()->index('antel_id_tantel_fk');
			$table->date('fecha_antecedente')->nullable();
			$table->text('observacion', 16777215)->nullable();
			$table->text('compromiso_per', 16777215)->nullable();
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
		Schema::drop('antecedentes_laborales');
	}

}
