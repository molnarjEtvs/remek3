<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("comment", function(Blueprint $table){
            $table->id("ID");
            $table->unsignedBigInteger("post_ID");
            $table->unsignedBigInteger("user_ID");
            $table->string("text", 500);
            $table->timestamps();

            $table->foreign("post_ID")->references("ID")->on("post");
            $table->foreign("user_ID")->references("ID")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("comment");
    }
}
