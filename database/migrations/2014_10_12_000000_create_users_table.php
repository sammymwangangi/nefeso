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
            $table->integer('national_id')->unique();
            $table->integer('phone_number')->unique();
            $table->integer('kra')->unique();
            $table->integer('date_registered');
            $table->integer('date_of_birth');
            $table->string('gender');
            $table->string('account_type');
            $table->string('marital_status');
            $table->string('postal_address');
            $table->string('public_address');
            $table->boolean('admin')->default(0);
            $table->string('email')->unique();
            $table->string('password');
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
