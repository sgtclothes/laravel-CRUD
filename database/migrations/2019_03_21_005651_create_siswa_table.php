<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
	/**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('siswas', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('nama_depan');
			$table->string('nama_belakang');
			$table->string('jenis_kelamin');
			$table->string('agama');
			$table->text('alamat');
			$table->timestamps();
		});
	}

	/**
     * Reverse the migrations.
     *
     * @return void
     */
	public function down()
	{
		Schema::dropIfExists('siswas');
	}
}
