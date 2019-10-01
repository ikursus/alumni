<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->unsignedInteger('title_id');
            $table->string('name');
            $table->string('nric');
            $table->string('gender');
            $table->string('phone');
            $table->text('address');
            $table->unsignedInteger('race_id')->nullable();
            $table->unsignedInteger('religion_id')->nullable();
            $table->unsignedInteger('nationality_id')->nullable();
            $table->string('gambar')->nullable();
            $table->string('status_perkahwinan');
            $table->string('role');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
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
