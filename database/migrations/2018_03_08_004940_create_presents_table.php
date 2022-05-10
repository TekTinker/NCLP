<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presents', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('attendance_id')->unsigned();
			$table->integer('student_id')->unsigned();
			$table->boolean('present');
            $table->timestamps();
        });

		Schema::table('presents', function (Blueprint $table) {
			$table->foreign('attendance_id')
				->references('id')
				->on('attendances');
		});

		Schema::table('presents', function (Blueprint $table) {
			$table->foreign('student_id')
				->references('id')
				->on('students');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presents');
    }
}
