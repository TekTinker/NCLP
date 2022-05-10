<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSTCsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_t_cs', function (Blueprint $table) {
            $table->increments('id');
			$table->string('uid')->unique();
			$table->string('name');
			$table->text('address');
			$table->string('taluka');
			$table->string('district');
			$table->string('state');
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
        Schema::dropIfExists('s_t_cs');
    }

}
