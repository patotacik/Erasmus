<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVyzvyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vyzvy', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Nazov',45);
            $table->integer('typvyzvy_id')->unsigned();
            $table->foreign('typvyzvy_id') ->references('id')->on('typvyzvy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vyzvy');
    }
}
