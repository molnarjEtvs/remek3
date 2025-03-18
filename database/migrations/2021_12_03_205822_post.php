<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("post", function(Blueprint $table){
            $table->id("ID");
            $table->unsignedBigInteger("user_ID");
            $table->string("text", 500);
            $table->string("title", 100);
            $table->integer("class");
            $table->unsignedBigInteger("file_ID");
            $table->unsignedBigInteger("subject_ID");
            $table->timestamps();

            $table->foreign("user_ID")->references("ID")->on("users");
            $table->foreign("file_ID")->references("ID")->on("files");
            $table->foreign("subject_ID")->references("ID")->on("subject");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("post");
    }
}
