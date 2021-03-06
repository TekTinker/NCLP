<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cls', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('stc_id')->unsigned();
			$table->timestamps();
        });

        Schema::table('cls', function (Blueprint $table){
			$table->foreign('stc_id')
				->references('id')
				->on('s_t_cs');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cls');
    }
}
