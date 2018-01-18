<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
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
            $table->string('lastname', 50);
            $table->string('firstname', 50);
            $table->integer('idGroup');
        });

        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category', 100);
        });

        Schema::create('phone_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser');
            $table->string('number', 25);
            $table->integer('idType');
        });

        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser');
            $table->string('email', 100);
            $table->integer('idType');
        });

        Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 50);
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
        Schema::dropIfExists('groups');
        Schema::dropIfExists('phoneNumbers');
        Schema::dropIfExists('emails');
        Schema::dropIfExists('types');
    }
}
