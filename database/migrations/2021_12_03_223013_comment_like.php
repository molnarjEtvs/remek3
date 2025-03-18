<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentLike extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("comment_like", function(Blueprint $table){
            $table->unsignedBigInteger("comment_ID");
            $table->unsignedBigInteger("user_ID");
            $table->timestamps();

            $table->foreign("comment_ID")->references("ID")->on("comment");
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
        Schema::drop("comment_like");
    }
}
