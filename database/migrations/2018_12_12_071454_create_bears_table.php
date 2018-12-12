<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bears', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("type");
            /*gentle,timid,shy,angry,crezy,violent,killer */
            $table->enum('danger_level', ['gntl', 'timid', 'shy', 'agr','crezy','vlnt','klr']);
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
        Schema::dropIfExists('bears');
    }
}
