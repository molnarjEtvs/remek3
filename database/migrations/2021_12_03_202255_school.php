<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class School extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("school", function(Blueprint $table){
            DB::statement('SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";');
            $table->id("ID");
            $table->string("name", 200);
        });
        DB::insert("INSERT INTO `school` (`ID`, `name`) VALUES (0,\"\"), (1,\"\")");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("school");
    }
}
