<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('stc_id')->unsigned();
            $table->string('photo');
            $table->string('type');
            $table->timestamps();
        });

        Schema::table('galleries', function (Blueprint $table){
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
        Schema::dropIfExists('galleries');
    }
}
