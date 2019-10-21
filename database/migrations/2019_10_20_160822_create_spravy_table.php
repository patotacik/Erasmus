<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpravyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spravy', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('vyzvy_id')->unsigned();
            $table->foreign('vyzvy_id') ->references('id')->on('vyzvy');
            $table->integer('pouzivatelia_id')->unsigned();
            $table->foreign('pouzivatelia_id') ->references('id')->on('pouzivatelia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spravy');
    }
}
