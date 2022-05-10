<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
			$table->string('gender')->nullable();
			$table->date('dob')->nullable()->default(null);
			$table->string('education')->nullable();
			$table->string('address')->nullable();
			$table->string('ward')->nullable();
			$table->string('taluka')->nullable();
			$table->string('district')->nullable();
			$table->string('state')->nullable();
			$table->string('mobile')->nullable();
			$table->string('aadhar')->nullable();
			$table->string('pan')->nullable();
			$table->string('category')->nullable();
			$table->string('cast')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
