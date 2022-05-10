<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('cl_id')->unsigned();
			$table->integer('emp_id');
			$table->integer('punch_id');
			$table->string('name');
			$table->text('address')->nullable();
			$table->string('marital_status')->nullable();
			$table->string('designation')->nullable();
			$table->string('mobile')->nullable();
			$table->string('shift')->nullable();
			$table->string('week_off')->nullable();
			$table->date('dob')->nullable();
			$table->date('doj')->nullable();
			$table->timestamps();
		});

		Schema::table('students', function (Blueprint $table) {
			$table->foreign('cl_id')
				->references('id')
				->on('cls');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('students');
	}
}
