<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostLike extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("post_like", function(Blueprint $table){
            $table->unsignedBigInteger("post_ID");
            $table->unsignedBigInteger("user_ID");
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
        Schema::drop("post_like");
    }
}
