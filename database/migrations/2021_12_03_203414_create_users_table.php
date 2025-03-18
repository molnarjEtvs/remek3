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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->integer("class_from")->default('1');
            $table->integer("class_to")->default('8');
            $table->unsignedBigInteger("school_ID")->default('1');
            $table->unsignedBigInteger("county_ID")->default('1');
            $table->unsignedBigInteger("file_ID")->default('1');
            $table->foreign("file_ID")->references("ID")->on("files");
            $table->foreign("school_ID")->references("ID")->on("school");
            $table->foreign("county_ID")->references("ID")->on("county");

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
