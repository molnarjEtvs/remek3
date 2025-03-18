<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserSubjectLookup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("user_subject_lookup", function(Blueprint $table){
            $table->unsignedBigInteger("user_ID");
            $table->unsignedBigInteger("subject_ID");

            $table->foreign("user_ID")->references("ID")->on("users");
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
        Schema::drop("user_subject_lookup");
    }
}
