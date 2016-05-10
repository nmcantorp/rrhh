<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdLoginTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ad_login', function(Blueprint $table)
		{
			$table->integer('id_usuario')->nullable();
			$table->string('usuario')->nullable();
			$table->string('nombre', 120)->nullable();
			$table->string('apellido', 120)->nullable();
			$table->string('clave')->nullable();
			$table->string('activo', 2)->nullable();
			$table->string('perfil', 30)->nullable();
			$table->string('foto')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ad_login');
	}

}
