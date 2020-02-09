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
			$table->integer('company_id');
			$table->boolean('active')->default(false);
            //$table->string('name');
            $table->string('email')->unique();
			$table->datetime('email_verified_at')->nullable();
            $table->string('password');
			$table->boolean('is_admin')->default(false);
			$table->string('last_login_ip')->nullable();
			$table->datetime('last_login_at')->nullable();
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
