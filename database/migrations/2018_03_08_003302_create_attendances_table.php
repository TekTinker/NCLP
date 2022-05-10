<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('cl_id')->unsigned();
			$table->string('class');
			$table->integer('stc_id')->unsigned();
			$table->string('stc');
			$table->integer('user_id')->unsigned();
			$table->string('user');
			$table->string('location');
			$table->decimal('lon', 10,7);
			$table->decimal('lat', 10,7);
			$table->boolean('VT')->default(false);
			$table->boolean('PD')->default(false);
			$table->boolean('PM')->default(false);
            $table->timestamps();
        });

		Schema::table('attendances', function (Blueprint $table) {
			$table->foreign('cl_id')
				->references('id')
				->on('cls');
		});

		Schema::table('attendances', function (Blueprint $table) {
			$table->foreign('stc_id')
				->references('id')
				->on('s_t_cs');
		});

		Schema::table('attendances', function (Blueprint $table) {
			$table->foreign('user_id')
				->references('id')
				->on('users');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
