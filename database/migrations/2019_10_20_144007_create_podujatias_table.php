<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePodujatiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podujatias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Nazov',45);
            $table->date('datum');
            $table->integer('mestos_id')->unsigned();
            $table->foreign('mestos_id') ->references('id')->on('mestos');
            $table->integer('univerzities_id')->unsigned();
            $table->foreign('univerzities_id') ->references('id')->on('univerzities');
            $table->integer('krajinies_id')->unsigned();
            $table->foreign('krajinies_id') ->references('id')->on('krajinies');
            $table->integer('vyzvy_id')->unsigned();
            $table->foreign('vyzvy_id') ->references('id')->on('vyzvies');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id') ->references('id')->on('users');
            $table->boolean('confirmed');
            $table->integer('pocitadlo');



        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('podujatias');
    }
}
