<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSTCVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_t_c_visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stc_uid');
            $table->string('month');
            $table->string('visitor_name');
            $table->string('visitor_designation');
            $table->date('date')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('s_t_c_visitors');
    }
}
